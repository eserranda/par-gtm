<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Home - PAR GTM</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:wght@400;500;700;900&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="{{ asset('home_assets') }}/lib/animate/animate.min.css" />
    <link href="{{ asset('home_assets') }}/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="{{ asset('home_assets') }}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('home_assets') }}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('home_assets') }}/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid topbar bg-light px-5 d-none d-lg-block">
        <div class="row gx-0 align-items-center">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-flex flex-wrap">
                    <a href="#" class="text-muted small me-4"><i
                            class="fas fa-map-marker-alt text-primary me-2"></i>Jl. Demmatande No.17, Kabupaten Mamasa,
                        Provinsi Sulawesi Barat</a>
                    {{-- <a href="tel:+01234567890" class="text-muted small me-4"><i
                            class="fas fa-phone-alt text-primary me-2"></i>+01234567890</a>
                    <a href="mailto:example@gmail.com" class="text-muted small me-0"><i
                            class="fas fa-envelope text-primary me-2"></i>Example@gmail.com</a> --}}
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a href="/login"><small class="me-3 text-dark"><i
                                class="fa fa-sign-in-alt text-primary me-2"></i>Login</small></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h1 class="text-primary">PAR GTM</h1>
                <!-- <img src="{{ asset('home_assets') }}/img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="#home" class="nav-item nav-link active">Home</a>
                    <a href="#visi-misi" class="nav-item nav-link">Visi Misi</a>
                    <a href="#kegiatan" class="nav-item nav-link">Kegiatan</a>
                    <a href="#pengurus" class="nav-item nav-link">Pengurus</a>
                    <a href="#gereja" class="nav-item nav-link">Gereja</a>
                    <a href="/home-klasis/" class="nav-item nav-link">Klasis</a>
                    {{--  
                    <a href="contact.html" class="nav-item nav-link">Contact Us</a> --}}
                </div>
                {{-- <a href="#" class="btn btn-primary rounded-pill py-2 px-4 my-3 my-lg-0 flex-shrink-0">Get
                    Started</a> --}}
            </div>
        </nav>

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
    </div>
    <!-- Navbar & Hero End -->

    <!-- Offer Start -->
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
    <!-- Offer End -->

    <!-- Services Start -->
    <div class="container-fluid service pb-5" id="kegiatan">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Kegiatan</h4>
                <h1 class="display-5 mb-4">Kegiatan PAR GTM</h1>
                {{-- <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis
                    cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt
                    sint dolorem autem obcaecati, ipsam mollitia hic.
                </p> --}}
            </div>
            <div class="row g-4">
                @foreach ($data as $d)
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="{{ asset('/storage/images/' . $d->image) }}"
                                    class="img-fluid rounded-top w-100" alt="Image">


                            </div>
                            <div class="rounded-bottom p-4">
                                <a href="#" class="h4 d-inline-block mb-4">{{ $d->kegiatan }}</a>
                                <p class="mb-4"> {{ $d->keterangan }} </p>
                                {{-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> --}}
                            </div>
                        </div>
                    </div>
                @endforeach

                {{-- <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('home_assets') }}/img/service-1.jpg"
                                class="img-fluid rounded-top w-100" alt="Image">
                        </div>
                        <div class="rounded-bottom p-4">
                            <a href="#" class="h4 d-inline-block mb-4"> Strategy Consulting</a>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, sint?
                                Excepturi facilis neque nesciunt similique officiis veritatis,
                            </p>
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                        </div>
                    </div>
                </div> --}}

            </div>
        </div>
    </div>
    <!-- Services End -->

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
                            <img src="{{ asset('home_assets') }}/img//no_image.png" class="img-fluid"
                                alt="">
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
                            <img src="{{ asset('home_assets') }}/img//no_image.png" class="img-fluid"
                                alt="">
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
                            <img src="{{ asset('home_assets') }}/img//no_image.png" class="img-fluid"
                                alt="">
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
                            <img src="{{ asset('home_assets') }}/img//no_image.png" class="img-fluid"
                                alt="">
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
                            <img src="{{ asset('home_assets') }}/img//no_image.png" class="img-fluid"
                                alt="">
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
                            <img src="{{ asset('home_assets') }}/img//no_image.png" class="img-fluid"
                                alt="">
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

    <!-- Testimonial Start -->
    <div class="container-fluid testimonial pb-5" id="gereja">
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
                                <td><a class="btn btn-sm btn-primary"
                                        href=" {{ route('jemaat.showJemaat', $d->nama_jemaat) }}">Lihat
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-6 text-center text-md-start mb-md-0">
                    <span class="text-body"><a href="#" class="border-bottom text-white"><i
                                class="fas fa-copyright text-light me-2"></i>PAR Gereja Toraja Mamasa</a>, All
                        right reserved.</span>
                </div>
                <div class="col-md-6 text-center text-md-end text-body">
                    <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                    <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                    <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                    {{-- Designed By <a class="border-bottom text-white" href="https://htmlcodex.com">HTML
                        Codex</a>
                    Distributed By <a class="border-bottom text-white" href="https://themewagon.com">ThemeWagon</a> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->



    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('home_assets') }}/lib/wow/wow.min.js"></script>
    <script src="{{ asset('home_assets') }}/lib/easing/easing.min.js"></script>
    <script src="{{ asset('home_assets') }}/lib/waypoints/waypoints.min.js"></script>
    <script src="{{ asset('home_assets') }}/lib/counterup/counterup.min.js"></script>
    <script src="{{ asset('home_assets') }}/lib/lightbox/js/lightbox.min.js"></script>
    <script src="{{ asset('home_assets') }}/lib/owlcarousel/owl.carousel.min.js"></script>


    <!-- Template Javascript -->
    <script src="{{ asset('home_assets') }}/js/main.js"></script>
</body>

</html>
