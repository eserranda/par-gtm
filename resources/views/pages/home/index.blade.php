@extends('pages.home.layouts.master')

@section('hero')
    <!-- Carousel Start -->
    <div class="header-carousel owl-carousel" id="home">
        <div class="header-carousel-item">
            <img src="{{ asset('home_assets') }}/img/bendera.jpg" class="img-fluid w-100" alt="Image">
            <div class="carousel-caption">
                <div class="container">
                    <div class="row g-5">
                        <div class="col-12 animated fadeInUp">
                            <div class="text-center">
                                {{-- <h4 class="text-primary text-uppercase fw-bold mb-4">Welcome To PAR Gereja Toraja
                               Mamasa</h4> --}}
                                <h1 class="display-6 text-uppercase text-white mb-4">"Persekutuan Anak dan Remaja
                                    Gereja Toraja Mamasa"</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-carousel-item">
            <img src="{{ asset('home_assets') }}/img/par1.jpg" class="img-fluid w-100" alt="Image">
            <div class="carousel-caption">
                <div class="container">
                    <div class="row gy-0 gx-5">
                        <div class="col-lg-0 col-xl-5"></div>
                        <div class="col-xl-7 animated fadeInLeft">
                            <div class="text-sm-center text-md-end">
                                <h4 class="text-primary text-uppercase fw-bold mb-4">Welcome To PAR Gereja Toraja
                                    Mamasa
                                </h4>
                                <h1 class="display-6 text-uppercase text-white mb-4">"Hai anakku, berikanlah hatimu
                                    kepadaku, biarlah matamu senang
                                    dengan jalan-jalanku."</h1>
                                <p class="mb-5 fs-5">
                                    Amsal 23:26
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-carousel-item">
            <img src="{{ asset('home_assets') }}/img/par2.jpg" class="img-fluid w-100" alt="Image">
            <div class="carousel-caption">
                <div class="container">
                    <div class="row g-5">
                        <div class="col-12 animated fadeInUp">
                            <div class="text-center">
                                <h4 class="text-primary text-uppercase fw-bold mb-4">Welcome To PAR Gereja Toraja
                                    Mamasa</h4>
                                <h1 class="display-6 text-uppercase text-white mb-4">"Biarkan anak-anak itu datang
                                    kepada-Ku, jangan menghalang-halangi mereka,
                                    sebab orang-orang seperti itulah yang empunya Kerajaan Sorga."</h1>
                                <p class="mb-5 fs-5">
                                    Matius 19:14
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-carousel-item">
            <img src="{{ asset('home_assets') }}/img/par3.jpg" class="img-fluid w-100" alt="Image">
            <div class="carousel-caption">
                <div class="container">
                    <div class="row g-5">
                        <div class="col-12 animated fadeInUp">
                            <div class="text-center">
                                <h4 class="text-primary text-uppercase fw-bold mb-4">Welcome To PAR Gereja Toraja
                                    Mamasa</h4>
                                <h1 class="display-6 text-uppercase text-white mb-4">"Marilah anak-anak,
                                    dengarkanlah aku, takut akan TUHAN akan
                                    kuajarkan kepadamu"</h1>
                                <p class="mb-5 fs-5">
                                    Mazmur 34:11
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->
@endsection

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

@section('kegiatan')
    <!-- Services Start -->
    <div class="container-fluid service pb-5" id="kegiatan">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Kegiatan</h4>
                <h1 class="display-5 mb-4">Kegiatan PAR GTM</h1>
            </div>
            <div class="row g-4">
                @foreach ($data as $d)
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="{{ asset('/storage/images/' . $d->image) }}" class="img-fluid rounded-top w-100"
                                    alt="Image">


                            </div>
                            <div class="rounded-bottom p-4">
                                <a href="#" class="h4 d-inline-block mb-4">{{ $d->kegiatan }}</a>
                                <p class="mb-4"> {{ $d->keterangan }} </p>
                                {{-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> --}}
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Services End -->
@endsection

@section('pengurus')
    <!-- Team Start -->
    <div class="container-fluid team pb-5" id="pengurus">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Pengurus</h4>
                <h1 class="display-5 mb-3">Pengurus KSB PAR GTM</h1>
                <p class="mb-0 fw-6"> Periode 2021 - 2026</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('home_assets') }}/img/no_image.png" class="img-fluid" alt="">
                        </div>
                        <div class="team-title">
                            <h4 class="mb-0">{{ $ketua_umum->nama_pengurus ?? '-' }}</h4>
                            <p class="mb-0">{{ $ketua_umum->jabatan ?? 'Ketua Umum' }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('home_assets') }}/img//no_image.png" class="img-fluid" alt="">
                        </div>
                        <div class="team-title">
                            <h4 class="mb-0">{{ $ketua_satu->nama_pengurus }}</h4>
                            <p class="mb-0">{{ $ketua_satu->jabatan }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('home_assets') }}/img//no_image.png" class="img-fluid" alt="">
                        </div>
                        <div class="team-title">
                            <h4 class="mb-0">{{ $ketua_dua->nama_pengurus }}</h4>
                            <p class="mb-0">{{ $ketua_dua->jabatan }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('home_assets') }}/img//no_image.png" class="img-fluid" alt="">
                        </div>
                        <div class="team-title">
                            <h4 class="mb-0">{{ $ketua_tiga->nama_pengurus }}</h4>
                            <p class="mb-0">{{ $ketua_tiga->jabatan }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('home_assets') }}/img//no_image.png" class="img-fluid" alt="">
                        </div>
                        <div class="team-title">
                            <h4 class="mb-0">{{ $sekeretaris_umum->nama_pengurus ?? '-' }}</h4>
                            <p class="mb-0">{{ $sekeretaris_umum->jabatan ?? 'Sekeretaris Umum' }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('home_assets') }}/img//no_image.png" class="img-fluid" alt="">
                        </div>
                        <div class="team-title">
                            <h4 class="mb-0">{{ $wakil_sekretaris->nama_pengurus ?? '-' }}</h4>
                            <p class="mb-0">{{ $wakil_sekretaris->jabatan ?? 'Wakil Sekeretaris' }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('home_assets') }}/img//no_image.png" class="img-fluid" alt="">
                        </div>
                        <div class="team-title">
                            <h4 class="mb-0">{{ $bendahara->nama_pengurus ?? '-' }}</h4>
                            <p class="mb-0">{{ $bendahara->jabatan ?? 'Bendahara' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
@endsection
