<?php

namespace App\Http\Controllers;

use App\Models\BidangDua;
use App\Models\BidangTiga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BidangTigaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.bidang_tiga.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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

    /**
     * Display the specified resource.
     */
    public function show(BidangTiga $bidangTiga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BidangTiga $bidangTiga)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BidangTiga $bidangTiga)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BidangTiga $bidangTiga)
    {
        //
    }
}