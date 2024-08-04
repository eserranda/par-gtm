@extends('layouts.master')

@section('page_title')
    Dashboard
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-3 col-sm-6">
            <div class="card mini-stat bg-primary">
                <div class="card-body mini-stat-img">
                    <div class="mini-stat-icon">
                        <i class="mdi mdi-cube-outline float-end"></i>
                    </div>
                    <div class="text-white">
                        <h6 class="text-uppercase mb-3 font-size-14 text-white">Klasis</h6>
                        <h2 class="mb-4 text-white">{{ $klasis }}</h2>
                        <span class="font-size-12">Data klasis</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card mini-stat bg-primary">
                <div class="card-body mini-stat-img">
                    <div class="mini-stat-icon">
                        <i class="mdi mdi-buffer float-end"></i>
                    </div>
                    <div class="text-white">
                        <h6 class="text-uppercase mb-3 font-size-14 text-white">Jemaat</h6>
                        <h2 class="mb-4 text-white">{{ $jemaat }}</h2>
                        <span class="font-size-12">Data jemaat</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card mini-stat bg-primary">
                <div class="card-body mini-stat-img">
                    <div class="mini-stat-icon">
                        <i class="mdi mdi-tag-text-outline float-end"></i>
                    </div>
                    <div class="text-white">
                        <h6 class="text-uppercase mb-3 font-size-14 text-white">Sinode</h6>
                        <h2 class="mb-4 text-white">{{ $pengurus }}</h2>
                        <span class="font-size-12">Data pengurus sinode</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card mini-stat bg-primary">
                <div class="card-body mini-stat-img">
                    <div class="mini-stat-icon">
                        <i class="mdi mdi-briefcase-check float-end"></i>
                    </div>
                    <div class="text-white">
                        <h6 class="text-uppercase mb-3 font-size-14 text-white">Data User</h6>
                        <h2 class="mb-4 text-white">{{ $user }}</h2>
                        <span class="font-size-12">User terdaftar</span>
                        {{-- <span class="badge bg-info"> +89% </span> <span class="ms-2">From previous period</span> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-3 col-sm-6">
            <div class="card mini-stat bg-primary">
                <div class="card-body mini-stat-img">
                    <div class="mini-stat-icon">
                        <i class="mdi mdi-cube-outline float-end"></i>
                    </div>
                    <div class="text-white">
                        <h6 class="text-uppercase mb-3 font-size-14 text-white">Anggaran</h6>
                        <h2 class="mb-4 text-white">{{ $anggran_sinode }}</h2>
                        <span class="font-size-12">Data Anggaran Belanja Sinode</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card mini-stat bg-primary">
                <div class="card-body mini-stat-img">
                    <div class="mini-stat-icon">
                        <i class="mdi mdi-cube-outline float-end"></i>
                    </div>
                    <div class="text-white">
                        <h6 class="text-uppercase mb-3 font-size-14 text-white">Program Kerja</h6>
                        <h2 class="mb-4 text-white">{{ $program_klasis }}</h2>
                        <span class="font-size-12">Data Program Kerja Klasis</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card mini-stat bg-primary">
                <div class="card-body mini-stat-img">
                    <div class="mini-stat-icon">
                        <i class="mdi mdi-cube-outline float-end"></i>
                    </div>
                    <div class="text-white">
                        <h6 class="text-uppercase mb-3 font-size-14 text-white">Par Jemaat</h6>
                        <h2 class="mb-4 text-white">{{ $pengurus_jemaat }}</h2>
                        <span class="font-size-12">Data Pengurus Par Jemaat</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
