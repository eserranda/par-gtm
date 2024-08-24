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

@section('pengurus')
    <!-- Team Start -->
    <div class="container-fluid team pb-5 mt-5" id="pengurus">
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
