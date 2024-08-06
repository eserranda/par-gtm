<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class KegiatanController extends Controller
{

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Kegiatan::latest('created_at')->get();
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

        return view('pages.kegiatan.index');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function  findById($id)
    {
        $data = Kegiatan::find($id);
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kegiatan' => 'required',
            'waktu' => 'required',
        ], [
            'required' => ':attribute harus diisi',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'messages' => $validator->errors()
            ], 422);
        }


        $save = Kegiatan::create($request->all());

        if ($save) {
            return response()->json([
                'success' => true,
                'messages' => 'Data berhasil ditambahkan',
            ], 201);
        } else {
            return response()->json([
                'success' => false,
                'messages' => 'Data gagal ditambahkan',
            ], 500);
        }
    }


    public function update(Request $request, Kegiatan $kegiatan)
    {
        $validator = Validator::make($request->all(), [
            'edit_kegiatan' => 'required',
            'edit_waktu' => 'required',
        ], [
            'required' => ':attribute harus diisi',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'messages' => $validator->errors()
            ], 422);
        }

        $update = $kegiatan::findOrFail($request->input('id'))->update([
            'kegiatan' => $request->input('edit_kegiatan'),
            'waktu' => $request->input('edit_waktu'),
            'tempat' => $request->input('edit_tempat'),
            'pelaksana' => $request->input('edit_pelaksana'),
        ]);

        if ($update) {
            return response()->json([
                'success' => true,
                'messages' => 'Data berhasil diupdate',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'messages' => 'Data gagal diupdate',
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kegiatan $kegiatan, $id)
    {
        try {
            $deleted = $kegiatan::findOrFail($id);
            $deleted->delete();

            return response()->json(['status' => true, 'message' => 'Data berhasil dihapus'], 200);
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => 'Gagal menghapus data'], 500);
        }
    }
}
