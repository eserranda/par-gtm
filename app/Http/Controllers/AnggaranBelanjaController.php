<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AnggaranBelanja;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class AnggaranBelanjaController extends Controller
{

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $jenisAnggaranFilter = $request->input('jenis_anggaran');
            $query = AnggaranBelanja::query();
            if ($jenisAnggaranFilter) {
                $query->where('jenis_anggaran', $jenisAnggaranFilter);
            }

            $data = $query->latest('created_at')->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '<a class="btn btn-outline-secondary btn-sm" title="Edit" onclick="edit(' . $row->id . ')"> <i class="fas fa-pencil-alt"></i> </a>';
                    $btn .= '<a class="btn btn-outline-secondary btn-sm  text-danger mx-2" title="Hapus" onclick="hapus(' . $row->id . ')"> <i class="fas fa-trash-alt"></i> </a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('pages.anggaran_belanja.index');
    }

    public function findById($id)
    {
        $data = AnggaranBelanja::find($id);
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'jenis_anggaran' => 'required',
            'sumber_anggaran' => 'required',
            'nominal_anggaran' => 'required',
        ], [
            'required' => ':attribute harus diisi',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'messages' => $validator->errors()
            ], 422);
        }

        $save = AnggaranBelanja::create([
            'jenis_anggaran' => $request->jenis_anggaran,
            'sumber_anggaran' => $request->sumber_anggaran,
            'nominal_anggaran' => $request->nominal_anggaran,
        ]);

        if ($save) {
            return response()->json([
                'success' => true,
                'messages' => 'Data Berhasilimpan'
            ], 201);
        } else {
            return response()->json([
                'success' => false,
                'messages' => 'Data Gagal Disimpan'
            ], 500);
        }
    }

    public function update(Request $request, AnggaranBelanja $anggaranBelanja)
    {
        $validator = Validator::make($request->all(), [
            'edit_jenis_anggaran' => 'required',
            'edit_sumber_anggaran' => 'required',
            'edit_nominal_anggaran' => 'required',
        ], [
            'required' => ':attribute harus diisi',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'messages' => $validator->errors()
            ], 422);
        }

        $update  = AnggaranBelanja::where('id', $request->input('id'))->update([
            'jenis_anggaran' => $request->edit_jenis_anggaran,
            'sumber_anggaran' => $request->edit_sumber_anggaran,
            'nominal_anggaran' => $request->edit_nominal_anggaran,
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
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AnggaranBelanja $anggaranBelanja, $id)
    {
        try {
            $del_siswa = $anggaranBelanja::findOrFail($id);
            $del_siswa->delete();

            return response()->json(['status' => true, 'message' => 'Data berhasil dihapus'], 200);
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => 'Gagal menghapus data'], 500);
        }
    }
}
