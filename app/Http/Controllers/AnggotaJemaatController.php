<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AnggotaJemaat;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class AnggotaJemaatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $dataFilter = $request->input('filter');

            $query = AnggotaJemaat::query();
            if ($dataFilter) {
                $query->where('id_klasis', $dataFilter);
            }

            $data = $query->latest('created_at')->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->editColumn('tgl_lahir', function ($row) {
                    return date('d-m-Y', strtotime($row->tgl_lahir));
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
        return view('pages.anggota-jemaat.index');
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_jemaat' => 'required',
            'nama' => 'required',
            // 'tgl_lahir' => 'required',
            'kelas' => 'required',
            'alamat' => 'required',
        ], [
            'required' => ':attribute harus diisi',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'messages' => $validator->errors()
            ], 402);
        }

        $save = AnggotaJemaat::create($request->all());
        if ($save) {
            return response()->json([
                'success' => true,
                'messages' => 'Data Berhasilimpan'
            ], 201);
        } else {
            return response()->json([
                'success' => false,
                'messages' => 'Data Gagal Disimpan'
            ], 409);
        }
    }


    public function findById($id)
    {
        $data = AnggotaJemaat::find($id);
        return response()->json($data);
    }


    public function update(Request $request, AnggotaJemaat $anggotaJemaat)
    {
        $validator = Validator::make($request->all(), [
            'edit_id_jemaat' => 'required',
            'edit_nama' => 'required',
            // 'edit_tgl_lahir' => 'required',
            'edit_kelas' => 'required',
            'edit_alamat' => 'required',
        ], [
            'required' => ':attribute harus diisi',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'messages' => $validator->errors()
            ], 402);
        }

        $update = $anggotaJemaat->where('id', $request->input('id'))->update([
            'id_jemaat' => $request->input('edit_id_jemaat'),
            'nama' => $request->input('edit_nama'),
            'tgl_lahir' => $request->input('edit_tgl_lahir'),
            'kelas' => $request->input('edit_kelas'),
            'alamat' => $request->input('edit_alamat'),
        ]);

        if ($update) {
            return response()->json([
                'success' => true,
                'messages' => 'Data Berhasilimpan'
            ], 201);
        } else {
            return response()->json([
                'success' => false,
                'messages' => 'Data Gagal Disimpan'
            ], 409);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AnggotaJemaat $anggotaJemaat, $id)
    {
        try {
            $delete = $anggotaJemaat::findOrFail($id);
            $delete->delete();

            return response()->json(['status' => true, 'message' => 'Data berhasil dihapus'], 200);
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => 'Gagal menghapus data'], 500);
        }
    }
}