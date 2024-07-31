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
                        <h6 class="text-uppercase mb-3 font-size-16 text-white">Klasis</h6>
                        <h2 class="mb-4 text-white">{{ $klasis }}</h2>
                        <span>Jumlah data</span>
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
                        <h6 class="text-uppercase mb-3 font-size-16 text-white">Jemaat</h6>
                        <h2 class="mb-4 text-white">{{ $jemaat }}</h2>
                        <span>Data jemaat</span>
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
                        <h6 class="text-uppercase mb-3 font-size-16 text-white">Pengurus</h6>
                        <h2 class="mb-4 text-white">{{ $pengurus }}</h2>
                        <span>Pengurus sinode</span>
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
                        <h6 class="text-uppercase mb-3 font-size-16 text-white">Data User</h6>
                        <h2 class="mb-4 text-white">{{ $user }}</h2>
                        <span>User terdaftar</span>
                        {{-- <span class="badge bg-info"> +89% </span> <span class="ms-2">From previous period</span> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
