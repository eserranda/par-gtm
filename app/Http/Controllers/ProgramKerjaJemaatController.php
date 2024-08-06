<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProgramKerjaJemaat;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class ProgramKerjaJemaatController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $dataFilter = $request->input('filter');

            $query = ProgramKerjaJemaat::query();
            if ($dataFilter) {
                $query->where('bidang', $dataFilter);
            }

            $data = $query->latest('created_at')->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('id_jemaat', function ($row) {
                    if ($row->id_jemaat) {
                        return $row->jemaat->nama_jemaat;
                    } else {
                        return '-';
                    }
                })
                ->addColumn('action', function ($row) {
                    $btn = '<div class="d-flex justify-content-start align-items-center">';
                    $btn .= '<a class="btn btn-outline-secondary btn-sm mx-1" title="Edit" onclick="edit(' . $row->id . ')"> <i class="fas fa-pencil-alt"></i> </a>';
                    $btn .= '<a class="btn btn-outline-secondary btn-sm text-danger" title="Hapus" onclick="hapus(' . $row->id . ')"> <i class="fas fa-trash-alt"></i> </a>';
                    $btn .= '</div>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('pages.program-kerja-jemaat.index');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_jemaat' => 'required',
            'bidang' => 'required',
        ], [
            'id_jemaat.required' => 'jemaat harus diisi',
            'bidang.required' => 'Bidang harus diisi',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'messages' => $validator->errors()
            ], 422);
        }

        $save = ProgramKerjaJemaat::make($request->all());
        $save->save();

        if ($save) {
            return response()->json([
                'success' => true
            ], 201);
        } else {
            return response()->json([
                'success' => false
            ], 500);
        }
    }

    public function findById($id)
    {
        $data = ProgramKerjaJemaat::find($id);
        return response()->json($data);
    }

    public function update(Request $request, ProgramKerjaJemaat $ProgramKerjaJemaat)
    {
        $validator = Validator::make($request->all(), [
            'edit_id_jemaat' => 'required',
            'edit_bidang' => 'required',
        ], [
            'id_jemaat.required' => 'jemaat harus diisi',
            'bidang.required' => 'Bidang harus diisi',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'messages' => $validator->errors()
            ], 422);
        }

        $update = $ProgramKerjaJemaat::find($request->id)->update([
            'id_jemaat' => $request->edit_id_jemaat,
            'bidang' => $request->edit_bidang,
            'tujuan' => $request->edit_tujuan,
            'waktu' => $request->edit_waktu,
            'tempat' => $request->edit_tempat,
        ]);

        if ($update) {
            return response()->json([
                'success' => true
            ], 201);
        } else {
            return response()->json([
                'success' => false
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProgramKerjaJemaat $ProgramKerjaJemaat, $id)
    {
        try {
            $deleted = $ProgramKerjaJemaat::findOrFail($id);
            $deleted->delete();

            return response()->json(['status' => true, 'message' => 'Data berhasil dihapus'], 200);
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => 'Gagal menghapus data'], 500);
        }
    }
}
