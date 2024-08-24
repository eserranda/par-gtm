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
