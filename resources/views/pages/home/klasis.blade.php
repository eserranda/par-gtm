<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Klasis Par GTM</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('klasis_assets') }}/img/favicon.png" rel="icon">
    <link href="{{ asset('klasis_assets') }}/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('klasis_assets') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('klasis_assets') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('klasis_assets') }}/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('klasis_assets') }}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="{{ asset('klasis_assets') }}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('klasis_assets') }}/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Active
  * Template URL: https://bootstrapmade.com/active-bootstrap-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="{{ asset('klasis_assets') }}/img/logo.png" alt=""> -->
                <h1 class="sitename">Klasis PAR GTM</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#home" class="active">Home</a></li>
                    <li><a href="/">Sinode</a></li>
                    <li><a href="#daftar_klasis">Daftar Klasis</a></li>
                    <li><a href="#pengurus">Pengurus Klasis</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

        </div>
    </header>

    <main class="main">

        <!-- About Section -->
        <section id="about" class="about section" id="home">

            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2" data-aos="fade-up" data-aos-delay="400">
                        <div class="swiper init-swiper">
                            <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  },
                  "breakpoints": {
                    "320": {
                      "slidesPerView": 1,
                      "spaceBetween": 40
                    },
                    "1200": {
                      "slidesPerView": 1,
                      "spaceBetween": 1
                    }
                  }
                }
              </script>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="{{ asset('klasis_assets') }}/img/logo_par.jpg" alt="Image"
                                        class="img-fluid">
                                </div>
                                {{-- <div class="swiper-slide">
                                    <img src="{{ asset('klasis_assets') }}/img/img_h_7.jpg" alt="Image"
                                        class="img-fluid">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('klasis_assets') }}/img/img_h_8.jpg" alt="Image"
                                        class="img-fluid">
                                </div> --}}
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 order-lg-1">
                        <span class="section-subtitle" data-aos="fade-up">Selamat Datang</span>
                        <h1 class="mb-4" data-aos="fade-up">
                            Klasis PAR Gereja Toraja Masamasa
                        </h1>
                        {{-- <p data-aos="fade-up">
                            Far far away, behind the word mountains, far from the countries
                            Vokalia and Consonantia, there live the blind texts. Separated they
                            live in Bookmarksgrove right at the coast of the Semantics, a large
                            language ocean.
                        </p>
                        <p class="mt-5" data-aos="fade-up">
                            <a href="#" class="btn btn-get-started">Get Started</a>
                        </p> --}}
                    </div>
                </div>
            </div>
        </section>

        <section id="blog-posts" class="blog-posts" id="pengurus">
            <div class="container section-title" data-aos="fade-up">
                <p>Pengurus</p>
                <h2>Data Pengurus</h2>
            </div>

            <div class="container">
                <div class="row gy-4">
                    <div class="col-md-12 col-lg-12">
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
                                @foreach ($pengurus_klasis as $d)
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
            </div>
        </section>
        <!-- End Section Title -->

        <!-- Blog Posts Section -->
        <section id="blog-posts" class="blog-posts section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <p>Klasis</p>
                <h2>Data Klasis</h2>
            </div><!-- End Section Title -->
            <div class="container">
                <div class="row gy-4">
                    <div class="col-md-12 col-lg-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Klasis</th>
                                    <th scope="col">Wilayah</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($klasis as $d)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $d->wilayah }}</td>
                                        <td>{{ $d->nama_klasis }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </section><!-- /Blog Posts Section -->


    </main>

    <footer id="footer" class="footer light-background">
        <div class="container">
            <div class="copyright d-flex flex-column flex-md-row align-items-center justify-content-md-between">
                <p>© <span>Copyright</span> <strong class="px-1 sitename">Klais PAR Gereja Toraja Mamasa</strong>
                    <span>All Rights
                        Reserved</span>
                </p>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you've purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                    {{-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> --}}
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('klasis_assets') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('klasis_assets') }}/vendor/php-email-form/validate.js"></script>
    <script src="{{ asset('klasis_assets') }}/vendor/aos/aos.js"></script>
    <script src="{{ asset('klasis_assets') }}/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('klasis_assets') }}/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="{{ asset('klasis_assets') }}/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('klasis_assets') }}/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="{{ asset('klasis_assets') }}/vendor/isotope-layout/isotope.pkgd.min.js"></script>

    <!-- Main JS File -->
    <script src="{{ asset('klasis_assets') }}/js/main.js"></script>

</body>

</html>
