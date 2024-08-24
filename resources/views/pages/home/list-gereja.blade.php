@extends('pages.home.layouts.master')

@section('hero')
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Daftar Gereja</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-primary">Daftar Gereja</li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="container-fluid testimonial pb-5 mt-5" id="gereja">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s">
                <h4 class="text-primary">Gereja</h4>
                <h1 class="display-5 mb-4">Daftar Gereja</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Jemaat</th>
                            <th scope="col">Pelayan/Pendeta</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jemaat as $d)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $d->nama_jemaat }}</td>
                                <td>{{ $d->pelayan }}</td>
                                <td>{{ $d->alamat }} </td>
                                <td><a class="btn btn-sm btn-primary" href=" {{ route('jemaat.showJemaat', $d->id) }}">Lihat
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
