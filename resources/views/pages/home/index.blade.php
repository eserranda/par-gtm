<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gereja Anak dan Remaja</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom CSS */
        .hero {
            position: relative;
            background-image: url('{{ asset('assets') }}/images/pages/sekolah-minggu.jpg');
            background-size: cover;
            background-position: center;
            padding: 100px 0;
            text-align: center;
            color: #ffffff;
            overflow: hidden;
        }

        /* Pseudo-element for blurring */
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: inherit;
            background-size: inherit;
            background-position: inherit;
            filter: blur(6px);
            z-index: 1;
        }

        /* Content inside the hero section */
        .hero .container {
            position: relative;
            z-index: 2;
        }

        .hero h1 {
            font-size: 3rem;
            font-weight: bold;
        }

        .hero p {
            font-size: 1.25rem;
        }

        .section-title {
            font-size: 2rem;
            margin-bottom: 30px;
            color: #007bff;
        }

        .custom-table {
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .navbar-custom {
            background: linear-gradient(90deg, #007bff, #9db6a7);
            color: #ffffff;
        }

        .navbar-custom .navbar-brand,
        .navbar-custom .nav-link {
            color: #ffffff;
        }

        .navbar-custom .nav-link:hover {
            color: #ffbb33;
        }

        /* .btn-custom {
            background-color: #ff4444;
            color: #ffffff;
        } */

        .btn-custom:hover {
            background-color: #3880c4;
            color: #ffffff;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom  sticky-top">
        <div class="container">
            {{-- <a class="navbar-brand" href="#">PAR GTM</a> --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#profile">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kegiatan">Kegiatan</a>
                    </li>
                </ul>
                <a href="login" class="btn btn-info btn-custom">Login</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1 class="text-dark">Selamat Datang di Persekutuan Anak & Remaja</h1>
            <H1 class="text-dark">Gereja Toraja Mamasa</H1>
            <p class="text-dark">Menghubungkan anak-anak dan remaja dengan iman mereka melalui kegiatan yang inspiratif
                dan menyenangkan.
            </p>
        </div>
    </section>

    <!-- Home Section -->
    <section id="profile" class="py-5">
        <div class="container">
            <h2 class="section-title">Sejarah Singkat</h2>
            <p>
                Gereja Toraja Mamasa (GTM) memahami dan meyakini bahwa anak dan remaja adalah
                bagian dari persekutuan orang-orang percaya kepada Yesus Kristus. Berdasarkan pemahaman
                tersebut, Gereja Toraja Mamasa membentuk wadah pelayanan yang disebut Persekutuan
                Anak dan Remaja Gereja Toraja Mamasa disingkat PAR GTM untuk mempersekutukan dan
                memperlengkapi anak dan remaja (0-15 tahun) dalam melaksanakan panggilan bersekutu,
                bersaksi dan melayani demi mewujudkan Gereja Toraja Mamasa yang Utuh, Mandiri dan
                Misioner. PAR GTM merupakan persekutuan kategorial dan merupakan bagian yang tidak
                terpisahkan dari persekutuan GTM pada semua lingkup, yakni Jemaat, Klasis dan Sinode.
                Pelayanan bagi anak dan remaja di GTM dilakukan seiring dengan pertumbuhan dan
                perkembangan pelayanan yang dilakukan oleh GTM. Dalam Sidang Majelis Sinode Am XX
                GTM tahun 2021 di Klasis Lakahang, disepakati untuk menjadikan PAR GTM sebagai salah
                satu kategorial pelayanan di GTM. Hal ini ditindaklanjuti dengan pelaksanaan Pertemuan Am
                I PAR GTM yang dilaksanakan pada tanggal 2-3 September 2022 di Mamasa. Tanggal 3
                September kemudian ditetapkan menjadi Hari Lahir Persekutuan Anak dan Remaja Gereja
                Toraja Mamasa.
                Dalam menata pelayanan PAR GTM pada semua lingkup pelayanan GTM, maka
                ditetapkan Pedoman Penatalayanan Persekutuan Anak dan Remaja Gereja Toraja Mamasa.
                Pedoman Penatalayanan ini mengatur hal-hal yang bersifat teknis sebagai pelaksanaan dari
                tata Dasar dan tata Rumah Tangga GTM.
            </p>
        </div>
    </section>

    <!-- Profile Section -->
    <section id="profile" class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title">Visi & Misi</h2>
            <div class="row">
                <!-- Card for Visi -->
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Visi</h3>
                            <p class="card-text">
                                Menjadi komunitas yang mengasihi dan melayani, membawa anak-anak dan remaja lebih dekat
                                kepada Tuhan.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Card for Misi -->
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Misi</h3>
                            <ul class="card-text">
                                <li>Membangun iman dan karakter anak-anak serta remaja.</li>
                                <li>Menyediakan lingkungan yang aman dan mendukung untuk pertumbuhan rohani.</li>
                                <li>Menyelenggarakan kegiatan yang inspiratif dan edukatif.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Kegiatan Section -->
    <section id="kegiatan" class="py-5">
        <div class="container">
            <h2 class="section-title">Kegiatan Persekutuan Anak dan Remaja Gereja</h2>
            <div class="table-responsive">
                <table class="table table-striped custom-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kegiatan</th>
                            <th>Tanggal</th>
                            <th>Waktu</th>
                            <th>Tempat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Persekutuan Doa</td>
                            <td>10 Agustus 2024</td>
                            <td>10:00 - 12:00</td>
                            <td>Aula Utama</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Retreat Remaja</td>
                            <td>24 Agustus 2024</td>
                            <td>09:00 - 17:00</td>
                            <td>Vila Pelangi</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Bakti Sosial</td>
                            <td>15 September 2024</td>
                            <td>08:00 - 15:00</td>
                            <td>Desa Suka Maju</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Lomba Cerdas Cermat Alkitab</td>
                            <td>29 September 2024</td>
                            <td>13:00 - 16:00</td>
                            <td>Gedung Serba Guna</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
