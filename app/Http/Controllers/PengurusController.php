<?php

namespace App\Http\Controllers;

use App\Models\Pengurus;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class PengurusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        if ($request->ajax()) {
            $data = Pengurus::latest('created_at')->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('periode', function ($row) {
                    return $row->tahun_mulai . '-' . $row->tahun_selesai;
                })
                ->addColumn('action', function ($row) {
                    $btn = '<a class="btn btn-outline-secondary btn-sm" title="Edit" onclick="edit(' . $row->id . ')"> <i class="fas fa-pencil-alt"></i> </a>';
                    $btn .= '<a class="btn btn-outline-secondary btn-sm  text-danger mx-2" title="Hapus" onclick="hapus(' . $row->id . ')"> <i class="fas fa-trash-alt"></i> </a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('pages.pengurus.index');
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_pengurus' => 'required',
            'jabatan' => 'required',
            'tahun_mulai' => 'required',
            'tahun_selesai' => 'required',
        ], [
            'required' => ':attribute harus diisi'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'messages' => $validator->errors()
            ], 422);
        }

        $save = Pengurus::create([
            'nama_pengurus' => $request->input('nama_pengurus'),
            'jabatan' => $request->input('jabatan'),
            'tahun_mulai' => $request->input('tahun_mulai'),
            'tahun_selesai' => $request->input('tahun_selesai'),
        ]);

        if ($save) {
            return response()->json([
                'success' => true,
                'messages' => 'Data berhasil disimpan'
            ]);
        } else {
            return response()->json([
                'success' => false,
                'messages' => 'Data gagal disimpan'
            ]);
        }
    }

    public function findById($id)
    {
        $data = Pengurus::find($id);
        return response()->json($data);
    }


    public function update(Request $request, Pengurus $pengurus)
    {
        $validator = Validator::make($request->all(), [
            'edit_nama_pengurus' => 'required',
            'edit_jabatan' => 'required',
            'edit_tahun_mulai' => 'required',
            'edit_tahun_selesai' => 'required',
        ], [
            'required' => ':attribute harus diisi'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'messages' => $validator->errors()
            ], 422);
        }

        $update = $pengurus::findOrFail($request->input('id'))->update([
            'nama_pengurus' => $request->input('edit_nama_pengurus'),
            'jabatan' => $request->input('edit_jabatan'),
            'tahun_mulai' => $request->input('edit_tahun_mulai'),
            'tahun_selesai' => $request->input('edit_tahun_selesai'),
        ]);

        if ($update) {
            return response()->json([
                'success' => true,
                'messages' => 'Data Berhasilimpan'
            ]);
        } else {
            return response()->json([
                'success' => false,
                'messages' => 'Data Gagal Disimpan'
            ]);
        }
    }


    public function destroy(Pengurus $pengurus, $id)
    {
        try {
            $del_siswa = $pengurus::findOrFail($id);
            $del_siswa->delete();

            return response()->json(['status' => true, 'message' => 'Data berhasil dihapus'], 200);
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => 'Gagal menghapus data'], 500);
        }
    }
}
