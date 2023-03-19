@extends('layouts-universal.main')
@section('layout-utama')
    <!-- body -->

    <body class="main-layout">
        <!-- loader  -->
        <div class="loader_bg">
            <div class="loader"><img src="images/loading.gif" alt="#" /></div>
        </div>
        <!-- end loader -->

        <!-- Awal Ini Partials Navbar -->
        @include('layouts-universal.partials-universal.navbar')
        <!-- Akhir Ini Partials Sidebar -->

        <section class="slider_section">
            <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="first-slide" src="images/slider1.png" alt="First slide">
                        <div class="container">
                            <div class="carousel-caption relative">
                                <h1>PTP SBGTS-GSBI <br> PT. Victory Chingluh Indonesia</h1>
                                <a href="{{ route('login') }}">Login Anggota</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="second-slide" src="images/slider2.png" alt="Second slide">
                        <div class="container">
                            <div class="carousel-caption relative">
                                <h1>PTP SBGTS-GSBI <br> PT. Victory Chingluh Indonesia</h1>
                                <a href="{{ route('login') }}">Login Anggota</a>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <i class='fa fa-angle-left'></i>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <i class='fa fa-angle-right'></i>
                </a>
                <a class="bottom_arrow_scroll" href="#about"><img src="icon/errow.png" /></a>
            </div>
        </section>

        <!-- about  -->
        <div id="about" class="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titlepage">
                            <h2>Sejarah</h2>
                            <span>Pada 15, April 2012 bertepatan di mana di deklarasikannya SBGTS-GSBI PT VCI yang menjadi
                                tonggak sejarah berdirinya SBGTS GSBI PT. Victory Chingluh Indonesia. Yang mana sebelum
                                berdiri SBGTS-GSBI di PT VCI bnyak sekali pelanggaran,tidak di jalnkannya UMSK di th 2012,
                                kondisi kerja yg sangat tidak manusiawi, sistem 6 mol yg di jalankan di bagian Ruuber Pres
                                di kerjakan oleh 6 orang laki-laki, akan tetapi di PT. VCI buruh perempuan di taruh di
                                bagian ruuber planyang jelas melangar kode etik Nike. Selain itu kesehatan yang di kelola
                                oleh Esra harus membatasi buged ketika buruh sakit dan berobat yang melebihi buged maka,
                                buruh harus menanggung kekurangannya. Sulitnya mengambil hak cuti tahunan, cuti haid (buruh
                                perempuan).
                                Dari situlah perwakilan dr buruh PT. VCI yang mempunyai pandangan sama, maka sepakat untuk
                                mendeklarasikan SBGTS-GSBI di PT. VCI pada tanggal 15 April 2012. Sekarang ini usia SBGTS
                                GSBI PT. VCI sudah 10 tahun. Maka jangan pernah lupakan sejarah tersebu karena bukan hal
                                yang mudah untuk mendirikan SBGTS-GSBI di PT VCI. Lebihnya PT. Victory Chingluh Indonesia
                                adalah perusahaan produsen sepatu merk Nike yang beralamat di JL. Otonom pasar Kamis
                                Kab.Tangerang. Tidak Kurang mempekerjakan 14.000 buruh.
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row" id="visimisi">
                    <div class="col-md-12">
                        <div class="titlepage">
                            <h2>Visi</h2>
                            <span>
                                <ul>1. Menyediakan pendidikan untuk buruh tentang kebijakan-kebijakan dan issu-issu yang
                                    berdampak terhadap buruh. </ul>
                                <ul>2. Mempromosikan dan melindungi hak-hak dan kesejahteraan buruh. </ul>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="titlepage">
                            <h2>Misi</h2>
                            <span>
                                <ul>1. Membangun kampanye untuk mewujudkan kesejahteraan buruh yang lebih baik. </ul>
                                <ul>2. menyatukan seluruh buruh di Indonesia. </ul>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end abouts -->

        <!-- service -->
        <div id="service" class="service">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titlepage">
                            <h2>Program Kerja</h2>
                            <span>Program Kerja ini sebagai wujud pengabdian organisasi terhadap massa demi terwujud nya
                                kesejahteraan anggota dan keluarganya.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container margin-r-l">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 thumb">
                        <div class="service-box">
                            <figure>
                                <img src="images/Program Kerja/ProkerPendidikanAnggota.png" class="zoom img-fluid "
                                    alt="">
                                <span class="hoverle">
                                    <a href="images/Program Kerja/ProkerPendidikanAnggota.png" class="fancybox"
                                        rel="ligthbox">Pendidikan
                                        Anggota</a>
                                </span>
                            </figure>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 thumb">
                        <div class="service-box">
                            <figure>
                                <img src="images/Program Kerja/ProkerBeasiswa.png" class="zoom img-fluid " alt="">
                                <span class="hoverle">
                                    <a href="images/Program Kerja/ProkerBeasiswa.png" class="fancybox"
                                        rel="ligthbox">Beasiswa Anak
                                        Anggota</a>
                                </span>
                            </figure>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 thumb">
                        <div class="service-box">
                            <figure>
                                <img src="images/Program Kerja/ProkerSantunan.png" class="zoom img-fluid " alt="">
                                <span class="hoverle">
                                    <a href="images/Program Kerja/ProkerSantunan.png" class="fancybox"
                                        rel="ligthbox">Santunan Anak
                                        Yatim</a>
                                </span>
                            </figure>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 thumb">
                        <div class="service-box">
                            <figure>
                                <img src="images/Program Kerja/ProkerBahasaInggris.png" class="zoom img-fluid "
                                    alt="">
                                <span class="hoverle">
                                    <a href="images/Program Kerja/ProkerBahasaInggris.png" class="fancybox"
                                        rel="ligthbox">Kursus
                                        Bahasa Inggris</a>
                                </span>
                            </figure>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 thumb">
                        <div class="service-box">
                            <figure>
                                <img src="images/Program Kerja/ProkerKomputer.png" class="zoom img-fluid " alt="">
                                <span class="hoverle">
                                    <a href="images/Program Kerja/ProkerKomputer.png" class="fancybox"
                                        rel="ligthbox">Kursus
                                        Komputer</a>
                                </span>
                            </figure>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 thumb">
                        <div class="service-box">
                            <figure>
                                <img src="images/Program Kerja/ProkerSembako.png" class="zoom img-fluid " alt="">
                                <span class="hoverle">
                                    <a href="images/Program Kerja/ProkerSembako.png" class="fancybox"
                                        rel="ligthbox">Pembagian
                                        Sembako</a>
                                </span>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end service -->

        <!-- our blog -->
        <div id="blog" class="blog">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titlepage">
                            <h2>Berita Acara</h2>
                            <span>Berita Acara rangkaian kegiatan kami dalam beberapa waktu yang lalu</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    @foreach ($artikels as $artikel)
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="blog-box">
                                <figure><a href="{{ route('lihat-berita-acara') }}"><img
                                            src="{{ asset('storage/public/' . $artikel->file) }}" alt="#" /></a>
                                    <span>{{ date('d M Y', strtotime($artikel->created_at)) }}</span>
                                </figure>

                                <div class="travel">
                                    <p><a href="{{ route('lihat-berita-acara') }}">Lihat Lebih Banyak</a></p>
                                </div>
                                <h3>{{ $artikel->judul }}</h3>
                                <p>{{ $artikel->deskripsi }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

                {{ $artikels->render() }}
            </div>
        </div>
        <!-- end our blog -->

        <!-- Testimonial -->
        <div id="contact" class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titlepage">
                            <h3>Contact</h3>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 offset-md-3">
                        <div class="contact">
                            <form method="POST" action="{{ route('kirim-email') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input class="contactus" placeholder="Nama" type="text" name="nama">
                                    </div>
                                    <div class="col-sm-12">
                                        <input class="contactus" placeholder="Email" type="text" name="email">
                                    </div>
                                    <div class="col-sm-12">
                                        <input class="contactus" placeholder="Handphone" type="number" name="kontak">
                                    </div>
                                    <div class="col-sm-12">
                                        <textarea class="textarea" placeholder="Pesan" type="text" name="pesan"></textarea>
                                    </div>
                                    <div class="col-sm-12">
                                        <button class="send">Kirim</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end Testimonial -->



        <!-- Awal Ini Partials Footer -->
        @include('layouts-universal.partials-universal.footer')
        <!-- Akhir Ini Partials Footer -->


    </body>
@endsection
