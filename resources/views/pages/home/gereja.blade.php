@extends('pages.home.layouts.master')

@section('hero')
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">{{ $jemaat->nama_jemaat }}</h4>
            {{-- <p class="display-6">{{ $jemaat->klasis->nama_klasis }}</p> --}}

        </div>
    </div>
@endsection

@section('content')
    <!-- Abvout Start -->
    <div class="container-fluid about py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-xl-7 wow fadeInLeft" data-wow-delay="0.2s">
                    <div>
                        <h4 class="text-primary">Profile</h4>
                        <h1 class="display-5 mb-4">{{ $jemaat->nama_jemaat }}</h1>
                        {{-- <p class="mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum velit temporibus
                            repudiandae ipsa, eaque perspiciatis cumque incidunt tenetur sequi reiciendis.
                        </p> --}}
                        <div class="row g-4">
                            <div class="col-md-6 col-lg-6 col-xl-6">
                                <div class="d-flex">
                                    <div><i class="fas fa-lightbulb fa-2x text-primary"></i></div>
                                    <div class="ms-4">
                                        <p class="mb-0">Klasis :</p>
                                        <h4>{{ $jemaat->klasis->nama_klasis }}</h4>

                                        {{-- <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-6">
                                <div class="d-flex">
                                    <div><i class="fas fa-map fa-2x text-primary"></i></div>
                                    <div class="ms-4">
                                        <p class="mb-0">Alamat :</p>
                                        <h4>{{ $jemaat->alamat }}</h4>
                                        {{-- <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-6">
                                <div class="d-flex">
                                    <div><i class="bi bi-bookmark-heart-fill fa-2x text-primary"></i></div>
                                    <div class="ms-4">
                                        <p class="mb-0">Pelayam/Pendeta :</p>
                                        <h4>{{ $jemaat->pelayan }}</h4>
                                        {{-- <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p> --}}
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="d-flex">
                                    <i class="fas fa-phone-alt fa-2x text-primary me-4"></i>
                                    <div>
                                        <h4>Tlp.</h4>
                                        <p class="mb-0 fs-5" style="letter-spacing: 1px;">{{ $jemaat->no_tlp ?? '-' }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="bg-primary rounded position-relative overflow-hidden">
                        <img src="img/about-2.png" class="img-fluid rounded w-100" alt="">

                        <div class="" style="position: absolute; top: -15px; right: -15px;">
                            <img src="img/about-3.png" class="img-fluid" style="width: 150px; height: 150px; opacity: 0.7;"
                                alt="">
                        </div>
                        <div class="" style="position: absolute; top: -20px; left: 10px; transform: rotate(90deg);">
                            <img src="img/about-4.png" class="img-fluid" style="width: 100px; height: 150px; opacity: 0.9;"
                                alt="">
                        </div>
                        <div class="rounded-bottom">
                            <img src="img/about-5.jpg" class="img-fluid rounded-bottom w-100" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

@section('visi_misi')
    <div class="container-fluid offer-section py-5" id="visi-misi">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                {{-- <h4 class="text-primary">Our Offer</h4> --}}
                <h1 class="display-5 mb-4">Visi Misi</h1>
                {{-- <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis
                cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt
                sint dolorem autem obcaecati, ipsam mollitia hic.
            </p> --}}
            </div>
            <div class="row g-5 align-items-center">
                <div class="col-xl-5 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="nav nav-pills bg-light rounded p-5">
                        <h1 class="display-7 mb-4">Visi</h1>
                        <a class="accordion-link p-4 mb-4" data-bs-toggle="pill" href="#collapseOne">
                            <h5 class="mb-0">1.Melayani anak dan remaja untuk menanamkan nilai-nilai iman Kristen
                                berdasarkan Alkitab</h5>
                        </a>
                        <a class="accordion-link p-4 mb-4" data-bs-toggle="pill" href="#collapseTwo">
                            <h5 class="mb-0">2.Memperlengkapi anak dan remaja agar menerima dan menghayati panggilan
                                Allah sehingga mengaku “YESUS KRISTUS ITULAH TUHAN DAN JURUSELAMAT”.</h5>
                        </a>
                        <a class="accordion-link p-4 mb-4" data-bs-toggle="pill" href="#collapseThree">
                            <h5 class="mb-0">3.Mendidik Anak dan remaja agar menjadi generasi yang takut akan Tuhan
                            </h5>
                        </a>
                        <a class="accordion-link p-4 mb-0" data-bs-toggle="pill" href="#collapseFour">
                            <h5 class="mb-0">4.Memperlengkapi warga gereja yang dipanggil dan diutus bagi pekerjaan
                                pelayanan PAR GTM.</h5>
                        </a>
                    </div>
                </div>
                <div class="col-xl-7 wow fadeInRight" data-wow-delay="0.4s">
                    <div class="tab-content">
                        <div id="collapseOne" class="tab-pane fade show p-0 active">
                            <div class="col-md-12">
                                <h1 class="display-5 mb-4">Misi</h1>
                                <p class="mb-4 fs-2 fw-bold">Membangun iman dan karakter anak-anak serta remaja melalui
                                    kegiatan
                                    yang inspiratif dan edukatif, serta menyediakan lingkungan yang aman dan mendukung
                                    untuk pertumbuhan rohani.
                                </p>
                                {{-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


<div class="container-fluid service pb-5">
    <div class="container pb-5">
        <h5>Data Pengurus {{ $jemaat->nama_jemaat }}</h5>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Bidang</th>
                    <th scope="col">Jabatan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pengurus_jemaat as $d)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $d->nama }}</td>
                        <td>{{ $d->bidang }}</td>
                        <td>{{ $d->jabatan }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
@endsection
