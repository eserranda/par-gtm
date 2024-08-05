<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengurusKlasis;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class PengurusKlasisController extends Controller
{

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $dataFilter = $request->input('filter');

            $query = PengurusKlasis::query();
            if ($dataFilter) {
                $query->where('bidang', $dataFilter);
            }

            $data = $query->latest('created_at')->get();
            return DataTables::of($data)
                ->addIndexColumn()
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
        return view('pages.pengurus-klasis.index');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_klasis' => 'required',
            'nama' => 'required',
            'bidang' => 'required',
        ], [
            'required' => ':attribute harus diisi',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'messages' => $validator->errors(),
            ], 422);
        }
        $save = PengurusKlasis::create($request->all());
        if ($save) {
            return response()->json([
                'success' => true,
                'messages' => 'Data berhasil disimpan'
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'messages' => 'Data gagal disimpan'
            ], 500);
        }
    }

    public function findById($id)
    {
        $data = PengurusKlasis::find($id);
        return response()->json($data);
    }


    public function update(Request $request, PengurusKlasis $pengurusKlasis)
    {
        $validator = Validator::make($request->all(), [
            'edit_id_klasis' => 'required',
            'edit_nama' => 'required',
            'edit_bidang' => 'required',
        ], [
            'required' => ':attribute harus diisi',
        ],);


        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'messages' => $validator->errors(),
            ], 422);
        }

        $update = $pengurusKlasis->where('id', $request->input('id'))->update([
            'id_klasis' => $request->input('edit_id_klasis'),
            'nama' => $request->input('edit_nama'),
            'bidang' => $request->input('edit_bidang'),
            'jabatan' => $request->input('edit_jabatan'),
        ]);

        if ($update) {
            return response()->json([
                'success' => true
            ], 200);
        } else {
            return response()->json([
                'success' => false
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PengurusKlasis $pengurusKlasis, $id)
    {
        try {
            $deleted = $pengurusKlasis::findOrFail($id);
            $deleted->delete();

            return response()->json(['status' => true, 'message' => 'Data berhasil dihapus'], 200);
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => 'Gagal menghapus data'], 500);
        }
    }
}
