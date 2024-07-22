@extends('layouts.master')


@section('page_title')
    Theologi dan Kurikulum
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="header-title"><b>Data Anggota</b></h5>
                        <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal"
                            data-bs-target="#addModal">Tambah Data</button>
                    </div>
                    <div class="table-responsive">
                        <table id="datatable" class="table table-bordered ">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kegiatan</th>
                                    <th>Waktu</th>
                                    <th>Tujuan</th>
                                    <th>Sasaran Belanja</th>
                                    <th>Sumber Biaya</th>
                                    <th>Penanggung Jawab</th>
                                </tr>
                            </thead>


                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                    <td>$320,800</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('pages.bidang_tiga.add')
@endsection
