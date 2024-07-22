<?php

namespace App\Http\Controllers;

use App\Models\BidangSatu;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class BidangSatuController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = BidangSatu::latest('created_at')->get();
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

        return view('pages.bidang_satu.index');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
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

        $save = BidangSatu::create([
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
    public function findById($id)
    {
        $data = BidangSatu::find($id);
        return response()->json($data);
    }


    public function update(Request $request, BidangSatu $bidangSatu)
    {
        $id = $request->input('id');
        $validator = Validator::make($request->all(), [
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

        $update = BidangSatu::where('id', $id)->update([
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BidangSatu $bidangSatu, $id)
    {
        try {
            $del_siswa = $bidangSatu::findOrFail($id);
            $del_siswa->delete();

            return response()->json(['status' => true, 'message' => 'Data berhasil dihapus'], 200);
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => 'Gagal menghapus data'], 500);
        }
    }
}