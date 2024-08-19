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
                ->editColumn('image', function ($row) {
                    return '<img src="' . asset('/storage/images/' . $row->image) . '"   class="avatar-lg rounded" alt="img"> ';
                })
                ->addColumn('action', function ($row) {
                    $btn = '<div class="d-flex justify-content-start align-items-center">';
                    $btn .= '<a class="btn btn-outline-secondary btn-sm mx-1" title="Edit" onclick="edit(' . $row->id . ')"> <i class="fas fa-pencil-alt"></i> </a>';
                    $btn .= '<a class="btn btn-outline-secondary btn-sm text-danger" title="Hapus" onclick="hapus(' . $row->id . ')"> <i class="fas fa-trash-alt"></i> </a>';
                    $btn .= '</div>';
                    return $btn;
                })
                ->rawColumns(['action', 'image'])
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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'required' => ':attribute harus diisi',
        ]);


        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'messages' => $validator->errors()
            ], 422);
        }


        // $save = Kegiatan::create($request->all());
        if ($request->hasFile('image')) {

            $file = $request->file('image');
            // $fileName = time() . '_' . $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            // $filePath = $file->storeAs('public/images', $fileName);  
            $file->move(public_path('storage/images'), $fileName);
        }

        $save = Kegiatan::create([
            'kegiatan' => $request->input('kegiatan'),
            'waktu' => $request->input('waktu'),
            'tempat' => $request->input('tempat'),
            'pelaksana' => $request->input('pelaksana'),
            'keterangan' => $request->input('keterangan'),
            'image' => $fileName,
        ]);

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
            'edit_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'required' => ':attribute harus diisi',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'messages' => $validator->errors()
            ], 422);
        }
        if ($request->hasFile('edit_image')) {

            $file = $request->file('edit_image');
            // $fileName = time() . '_' . $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $filePath = $file->storeAs('public/images', $fileName);
        }

        $update = $kegiatan::findOrFail($request->input('id'))->update([
            'kegiatan' => $request->input('edit_kegiatan'),
            'waktu' => $request->input('edit_waktu'),
            'tempat' => $request->input('edit_tempat'),
            'pelaksana' => $request->input('edit_pelaksana'),
            'keterangan' => $request->input('edit_keterangan'),
            'image' => $fileName,
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
