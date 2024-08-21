<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Jemaat;
use App\Models\Klasis;
use App\Models\Kegiatan;
use App\Models\Pengurus;
use App\Models\Dashboard;
use Illuminate\Http\Request;
use App\Models\PengurusJemaat;
use App\Models\AnggaranBelanja;
use App\Models\ProgramKerjaKlasis;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $klasis = Klasis::count();
        $pengurus = Pengurus::count();
        $jemaat = Jemaat::count();
        $user = User::count();
        $pengurus_jemaat = PengurusJemaat::count();
        $anggran_sinode = AnggaranBelanja::count();
        $program_klasis = ProgramKerjaKlasis::count();
        return view('pages.dashboard.index',  compact('klasis', 'pengurus', 'jemaat', 'pengurus_jemaat', 'anggran_sinode', 'program_klasis', 'user'));
    }


    public function home()
    {
        $ketua_umum = Pengurus::where('jabatan', 'Ketua Umum')->first('nama_pengurus', 'jabatan');
        $ketua_satu = Pengurus::where('jabatan', 'Ketua I')->first();
        $ketua_dua = Pengurus::where('jabatan', 'Ketua II')->first();
        $ketua_tiga = Pengurus::where('jabatan', 'Ketua III')->first();
        $sekeretaris_umum = Pengurus::where('jabatan', 'Sekretaris Umum')->first();
        $wakil_sekretaris = Pengurus::where('jabatan', 'Wakil Sekretaris')->first();
        $bendahara = Pengurus::where('jabatan', 'Bendahara')->first();
        $data = Kegiatan::latest('created_at')->get();
        return view('pages.home.index', compact('data', 'ketua_umum', 'ketua_satu', 'ketua_dua', 'ketua_tiga', 'sekeretaris_umum', 'wakil_sekretaris', 'bendahara'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Dashboard $dashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dashboard $dashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dashboard $dashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dashboard $dashboard)
    {
        //
    }
}
