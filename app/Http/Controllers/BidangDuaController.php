<?php

namespace App\Http\Controllers;

use App\Models\BidangDua;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class BidangDuaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $bidangFilter = $request->input('bidang');

            $query = BidangDua::query();
            if ($bidangFilter) {
                $query->where('bidang', $bidangFilter);
            }

            $data = $query->latest('created_at')->get();

            // $data = BidangDua::latest('created_at')->get();
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
        return view('pages.bidang_dua.index');
    }

    public function findById($id)
    {
        $data = BidangDua::find($id);
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'bidang' => 'required',
            'nama_kegiatan' => 'required',
            'waktu_dan_tempat' => 'required',
            'tujuan' => 'required',
            'sasaran_belanja' => 'required',
            'sumber_biaya' => 'required',
            'penanggung_jawab' => 'required',
        ], [
            'required' => ':attribute harus diisi',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'messages' => $validator->errors()
            ], 422);
        }

        $save = BidangDua::create([
            'bidang' => $request->bidang,
            'nama_kegiatan' => $request->nama_kegiatan,
            'waktu_dan_tempat' => $request->waktu_dan_tempat,
            'tujuan' => $request->tujuan,
            'sasaran_belanja' => $request->sasaran_belanja,
            'sumber_biaya' => $request->sumber_biaya,
            'penanggung_jawab' => $request->penanggung_jawab,
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


    public function update(Request $request, BidangDua $bidangDua)
    {
        $validator = Validator::make($request->all(), [
            'edit_bidang' => 'required',
            'edit_nama_kegiatan' => 'required',
            'edit_waktu_dan_tempat' => 'required',
            'edit_tujuan' => 'required',
            'edit_sasaran_belanja' => 'required',
            'edit_sumber_biaya' => 'required',
            'edit_penanggung_jawab' => 'required',
        ], [
            'required' => ':attribute harus diisi',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'messages' => $validator->errors()
            ], 422);
        }

        $update = BidangDua::where('id', $request->input('id'))->update([
            'bidang' => $request->input('edit_bidang'),
            'nama_kegiatan' => $request->input('edit_nama_kegiatan'),
            'waktu_dan_tempat' => $request->input('edit_waktu_dan_tempat'),
            'tujuan' => $request->input('edit_tujuan'),
            'sasaran_belanja' => $request->input('edit_sasaran_belanja'),
            'sumber_biaya' => $request->input('edit_sumber_biaya'),
            'penanggung_jawab' => $request->input('edit_penanggung_jawab'),
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

    public function destroy(BidangDua $bidangDua, $id)
    {
        try {
            $del_siswa = $bidangDua::findOrFail($id);
            $del_siswa->delete();

            return response()->json(['status' => true, 'message' => 'Data berhasil dihapus'], 200);
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => 'Gagal menghapus data'], 500);
        }
    }
}
