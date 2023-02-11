@extends('layouts.main')
@section('layout-utama')
    <!-- Awal Top Section -->
    <section id="top">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
                    <div data-aos="zoom-out">
                        <h1>Selamat Datang di, Website <span> SBGTS-GSBI PT. VICTORY CHINGLUH INDONESIA</span></h1>
                        <h2>PIMPINAN TINGKAT PERUSAHAAN SERIKAT BURUH GARMEN TEKSTIL DAN SEPATU-GABUNGAN SERIKAT BURUH
                            INDONESIA
                            PT. VICTORY CHINGLUH INDONESIA
                        </h2>
                        <div class="text-center text-lg-start">
                            <a href="#about" class="btn-get-started scrollto">LOGIN</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-1 order-lg-2 top-img" data-aos="zoom-out" data-aos-delay="300">
                    <img src="images/GSBI_Indonesia-removebg-preview.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

        <svg class="top-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 24 150 28 " preserveAspectRatio="none">
            <defs>
                <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
            </defs>
            <g class="wave1">
                <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
            </g>
            <g class="wave2">
                <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
            </g>
            <g class="wave3">
                <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
            </g>
        </svg>

    </section>
    <!-- Akhir top Section -->

    <!-- Awal Section Program Kerja -->
    <section id="berita-acara" class="berita-acara">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-service-item owl-carousel">
                        <div class="item">
                            <a href="{{ url('program-kerja') }}">
                                <div class="berica-item">
                                    <div class="thumb">
                                        <img src="images/berita-acara/Santunan Anak Yatim.png" alt="">
                                    </div>
                                    <div class="down-content">
                                        <h4>SANTUNAN ANAK YATIM</h4>
                                        <span>Program Kerja</span>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="item">
                            <a href="#">
                                <div class="berica-item">
                                    <div class="thumb">
                                        <img src="images/berita-acara/Pendidikan Untuk Anggota.png" alt="">
                                    </div>
                                    <div class="down-content">
                                        <h4>PENDIDIKAN ANGGOTA</h4>
                                        <span>Program Kerja</span>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="item">
                            <a href="#">
                                <div class="berica-item">
                                    <div class="thumb">
                                        <img src="images/berita-acara/Pembagian Sembako.png" alt="">
                                    </div>
                                    <div class="down-content">
                                        <h4>PEMBAGIAN SEMBAKO</h4>
                                        <span>Program Kerja</span>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="item">
                            <a href="#">
                                <div class="berica-item">
                                    <div class="thumb">
                                        <img src="images/berita-acara/Beasiswa Anak.png" alt="">
                                    </div>
                                    <div class="down-content">
                                        <h4>BEASISWA ANAK</h4>
                                        <span>Berita Acara</span>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="item">
                            <a href="#">
                                <div class="berica-item">
                                    <div class="thumb">
                                        <img src="images/berita-acara/Kursus.png" alt="">
                                    </div>
                                    <div class="down-content">
                                        <h4>KURSUS KOMPUTER & BAHASA INGGRIS</h4>
                                        <span>Berita Acara</span>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Section Program Kerja -->

    <!-- ======= Awal About Section ======= -->
    <section id="about" class="about">
        <div class="container">
            <div class="section-heading" data-aos="fade-up" data-aos-delay="400">
                <h6>Tentang</h6>
                <h4>Tentang <em>SBGTS-GSBI PT. VCI</em></h4>
                <div class="line-dec"></div>
            </div>
            <div class="icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5"
                data-aos="fade-left">
                <p class="text-center">SBGTS-GSBI PT. Victory Chingluh Indonesia adalah organisasi Perjuangan Buruh
                    yang independen, militan, patriotik dan demokratis</p>

                <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                    <h4 class="title text-center">SEJARAH HIMPUNAN</h4>
                    <p class="description text-justify">Pada 15, April 2012 bertepatan di mana di deklarasikannya
                        SBGTS-GSBI PT VCI yang menjadi tonggak sejarah berdirinya SBGTS GSBI PT. Victory Chingluh
                        Indonesia. Yang mana sebelum berdiri SBGTS-GSBI di PT VCI bnyak sekali pelanggaran,tidak di
                        jalnkannya UMSK di th 2012, kondisi kerja yg sangat tidak manusiawi, sistem 6 mol yg di jalankan
                        di bagian Ruuber Pres di kerjakan oleh 6 orang laki-laki, akan tetapi di PT. VCI buruh perempuan
                        di taruh di bagian ruuber planyang jelas melangar kode etik Nike. Selain itu kesehatan yang di
                        kelola oleh Esra harus membatasi buged ketika buruh sakit dan berobat yang melebihi buged maka,
                        buruh harus menanggung kekurangannya. Sulitnya mengambil hak cuti tahunan, cuti haid (buruh
                        perempuan).
                        Dari situlah perwakilan dr buruh PT. VCI yang mempunyai pandangan sama, maka sepakat untuk
                        mendeklarasikan SBGTS-GSBI di PT. VCI pada tanggal 15 April 2012. Sekarang ini usia SBGTS GSBI
                        PT. VCI sudah 10 tahun. Maka jangan pernah lupakan sejarah tersebu karena bukan hal yang mudah
                        untuk mendirikan SBGTS-GSBI di PT VCI. Lebihnya PT. Victory Chingluh Indonesia adalah perusahaan
                        produsen sepatu merk Nike yang beralamat di JL. Otonom pasar Kamis Kab.Tangerang. Tidak Kurang
                        mempekerjakan 14.000 buruh.
                    </p>
                </div>

                <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                    <h4 class="title text-center">VISI HMIF</h4>
                    <p class="description text-justify">
                        Menyediakan pendidikan untuk buruh tentang kebijakan-kebijakan dan issu-issu yang berdampak
                        terhadap buruh untuk mempromosikan dan melindungi hak-hak dan kesejahteraan buruh
                    </p>
                </div>

                <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                    <h4 class="title text-center">MISI HMIF</h4>
                    <p class="description text-justify">
                        Membangun kampanye untuk mewujudkan kesejahteraan buruh yang lebih baikuntuk menyatukan seluruh
                        buruh di Indonesia
                    </p>
                </div>

                <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
                    <h4 class="title text-center">PROGRAM KERJA</h4>
                    <p class="description text-justify">
                    <ol>
                        <li>
                            Menyelenggarakan pendidikan untuk Anggota SBGTS-GSBI PT. VCI
                        </li>
                        <li>
                            Menyelenggarakan Kursus Bahasa Inggris dan Komputer untuk Anak Anggota dan Anggota
                            SBGTS-GSBI PT.VCI
                        <li>
                            Memberdayakan, Mencerdaskan Putra & Putri Anggota SBGTS-GSBI PT. VCI
                        </li>
                        <li>
                            Beasiswa Khusus Anak Anggota SBGTS-GSBI
                        </li>
                        <li>
                            Mengembangkan Seni Budaya dan Olah Raga Sepak Bola, Teatrikal, Pendakian, Group Musik,dll
                        <li>
                            Pembagian Sembako Setiap Akhir Tahun
                        </li>
                        <li>
                            Santuan Untuk Anak Yatim
                        </li>

                    </ol>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!--Akhir About Section -->

    <!-- Awal Profile Section -->
    <section id="video">
        <div class="yt">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading" data-aos="fade-up" data-aos-delay="300">
                            <h6>Video</h6>
                            <h4>Check Video Profile <em>SBGTS-GSBI PT. VCI</em></h4>
                            <div class="line-dec"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">

                        <!-- Awal Video Preview -->
                        <div class="image-container" data-aos="fade-up" data-aos-delay="400">
                            <div class="video-wrapper">
                                <a class="popup-youtube" href="https://www.youtube.com/watch?v=fQLEVipgKD4"
                                    target="_blank" data-aos="fade-in">
                                    <img class="img-fluid" src="images/gambar-video.svg" alt="alternative">
                                    <span class="video-play-button">
                                        <span></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <!-- Akhir Video Preview -->

                        <p data-aos="fade-up" data-aos-delay="500">Kunjungi Channel Youtube Kami <strong>SBGTS-GSBI
                                PT. VCI</strong> Untuk mengetahui kegiatan-kegiatan yang kami lakukan</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Profile Section -->


    <!-- Awal Structure Section -->
    <section id="structure" class="structure">
        <div class="container">

            <!-- DEPARTEMEN -->
            <div id="departemen" class="departemen section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-heading" data-aos="fade-up" data-aos-delay="400">
                                <h6>Struktur</h6>
                                <h4>Struktur <em>Kepengurusan SBGTS-GSBI PT. VCI</em></h4>
                                <div class="line-dec"></div>
                            </div>
                        </div>
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                            <p>Selamat datang di website SBGTS-GSBI PT. VCI yang kami tujukan untuk seluruh unsur
                                khalayak umum
                                guna dapat mengakses seluruh informasi tentang organisai kami. Tentunya dalam penyajian
                                informasi masih banyak kekurangan, oleh karena itu kepada seluruh anggota dan
                                masyarakat umum dapat memberikan saran dan kritik demi kemajuan lebih lanjut.
                            </p><br>
                            <p>
                                Kami berharap Website ini dapat dijadikan wahana interaksi yang positif baik antar
                                anggota maupun masyarakat pada umumnya, sehingga dapat menjalin silaturahmi
                                yang erat disegala unsur. Mari kita bekerja dan berkarya dengan mengharap ridho sang
                                Kuasa dan keikhlasan yang tulus demi anak bangsa.
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <div class="swiper mySwiper swiper-pengurusinti">
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide slide-pengurusinti">
                                        <div class="member" data-aos="zoom-in" data-aos-delay="400">
                                            <div class="pic"><img src="images/pengurusinti/user.png" class="img-fluid"
                                                    alt=""></div>
                                            <div class="member-info">
                                                <h4>Suwandi Hekindo</h4>
                                                <span>Ketua Umum</span>
                                                <div class="social">
                                                    <a href=""><i class="bi bi-twitter"></i></a>
                                                    <a href=""><i class="bi bi-facebook"></i></a>
                                                    <a href=""><i class="bi bi-instagram"></i></a>
                                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide slide-pengurusinti">
                                        <div class="member" data-aos="zoom-in" data-aos-delay="100">
                                            <div class="pic"><img src="images/pengurusinti/user.png" class="img-fluid"
                                                    alt=""></div>
                                            <div class="member-info">
                                                <h4>Suhardi</h4>
                                                <span>Wakil Ketua</span>
                                                <div class="social">
                                                    <a href=""><i class="bi bi-twitter"></i></a>
                                                    <a href=""><i class="bi bi-facebook"></i></a>
                                                    <a href=""><i class="bi bi-instagram"></i></a>
                                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide slide-pengurusinti">
                                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                                            <div class="pic"><img src="images/pengurusinti/user.png" class="img-fluid"
                                                    alt=""></div>
                                            <div class="member-info">
                                                <h4>Mohammad Bahri</h4>
                                                <span>Sekretaris</span>
                                                <div class="social">
                                                    <a href=""><i class="bi bi-twitter"></i></a>
                                                    <a href=""><i class="bi bi-facebook"></i></a>
                                                    <a href=""><i class="bi bi-instagram"></i></a>
                                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide slide-pengurusinti">
                                        <div class="member" data-aos="zoom-in" data-aos-delay="300">
                                            <div class="pic"><img src="images/pengurusinti/user.png" class="img-fluid"
                                                    alt=""></div>
                                            <div class="member-info">
                                                <h4>Heri</h4>
                                                <span>Wakil Sekretaris</span>
                                                <div class="social">
                                                    <a href=""><i class="bi bi-twitter"></i></a>
                                                    <a href=""><i class="bi bi-facebook"></i></a>
                                                    <a href=""><i class="bi bi-instagram"></i></a>
                                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide slide-pengurusinti">
                                        <div class="member" data-aos="zoom-in" data-aos-delay="400">
                                            <div class="pic"><img src="images/pengurusinti/user.png" class="img-fluid"
                                                    alt=""></div>
                                            <div class="member-info">
                                                <h4>Subibit</h4>
                                                <span>Bendahara</span>
                                                <div class="social">
                                                    <a href=""><i class="bi bi-twitter"></i></a>
                                                    <a href=""><i class="bi bi-facebook"></i></a>
                                                    <a href=""><i class="bi bi-instagram"></i></a>
                                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide slide-pengurusinti">
                                        <div class="member" data-aos="zoom-in" data-aos-delay="100">
                                            <div class="pic"><img src="images/pengurusinti/user.png" class="img-fluid"
                                                    alt=""></div>
                                            <div class="member-info">
                                                <h4>Nasrullah</h4>
                                                <span>Bendahara</span>
                                                <div class="social">
                                                    <a href=""><i class="bi bi-twitter"></i></a>
                                                    <a href=""><i class="bi bi-facebook"></i></a>
                                                    <a href=""><i class="bi bi-instagram"></i></a>
                                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 struktur-departemen">
                            <div class="section-heading" data-aos="fade-up" data-aos-delay="400">
                                <h4>Struktur <em>Departemen</em></h4>
                                <div class="line-dec"></div>
                            </div>
                            <div class="naccs">
                                <div class="grid" data-aos="fade-up" data-aos-delay="400">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="menu">
                                                <div class="thumb">
                                                    <div class="thumb">
                                                        <span class="icon"><img src="images/departemen_icon/mother.png"
                                                                alt=""></span>
                                                        Dept. Perempuan & Buruh Anak
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="thumb">
                                                        &nbsp; <span class="icon"><img
                                                                src="images/departemen_icon/law.png"
                                                                alt=""></span>
                                                        Dept. Hukum & Advokasi
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="thumb">
                                                        &nbsp; <span class="icon"><img
                                                                src="images/departemen_icon/teamwork.png"
                                                                alt=""></span>
                                                        Dept. Organisasi
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="thumb">
                                                        &nbsp; <span class="icon"><img
                                                                src="images/departemen_icon/social-media.png"
                                                                alt=""></span>
                                                        Dept. Diklat & Propaganda
                                                    </div>
                                                </div>
                                                <div class="thumb">
                                                    <div class="thumb">
                                                        &nbsp; <span class="icon"><img
                                                                src="images/departemen_icon/customer-service.png"
                                                                alt=""></span>
                                                        Dept. Pelayanan Masa
                                                    </div>
                                                </div>
                                                <div class="thumb">
                                                    <div class="thumb">
                                                        <span class="icon"><img src="images/departemen_icon/sports.png"
                                                                alt=""></span>
                                                        Dept. Seni Budaya & Olahraga
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <!-- Departemen Perempuan & Buruh Anak -->
                                            <ul class="nacc">
                                                <li class="active">
                                                    <div>
                                                        <div class="thumb">
                                                            <div class="row">
                                                                <div class="col-lg-6 align-self-center">
                                                                    <div class="left-text">
                                                                        <h4>Departemen Perempuan & Buruh Anak</h4>
                                                                        <p>Departemen Perempuan & Buruh Anak Merupakan
                                                                            salah satu
                                                                            departemen yang ada di SBGTS-GSBI PT.
                                                                            Victory Chingluh Indonesia</p>
                                                                        <h6>Visi</h6>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur
                                                                            adipisicing elit, sed do eiusmod
                                                                            tempor incididunt ut labore et dolore magna
                                                                            aliqua. Ut enim ad minim veniam,
                                                                            quis nostrud exercitation ullamco laboris
                                                                            nisi ut aliquip ex ea commodo
                                                                            consequat.</p>
                                                                        <h6>Misi</h6>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur
                                                                            adipisicing elit, sed do eiusmod
                                                                            tempor incididunt ut labore et dolore magna
                                                                            aliqua. Ut enim ad minim veniam,
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 align-self-center">

                                                                    <div
                                                                        class="owl-departemen-item owl-carousel departemen-carousel">

                                                                        <div class="item">
                                                                            <!-- Awal Kepala Departemen Perempuan & Buruh Anak -->
                                                                            <a href="#">
                                                                                <div class="member" data-aos="zoom-in"
                                                                                    data-aos-delay="400">
                                                                                    <div class="pic"><img
                                                                                            src="images/departemen5/user.png"
                                                                                            class="img-fluid"
                                                                                            alt=""></div>
                                                                                    <div class="member-info">
                                                                                        <h4>Leni Oktira Sari</h4>
                                                                                        <span>Kep. Dept Perempuan &
                                                                                            Buruh Anak</span>
                                                                                        <div class="social">
                                                                                            <a href=""><i
                                                                                                    class="bi bi-twitter"></i></a>
                                                                                            <a href=""><i
                                                                                                    class="bi bi-facebook"></i></a>
                                                                                            <a href=""><i
                                                                                                    class="bi bi-instagram"></i></a>
                                                                                            <a href=""><i
                                                                                                    class="bi bi-linkedin"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                        <!-- Akhir Kepala Departemen Perempuan & Buruh Anak -->

                                                                        <div class="item">
                                                                            <!-- Awal Anggota Perempuan & Buruh Anak -->
                                                                            <a href="#">
                                                                                <div class="member" data-aos="zoom-in"
                                                                                    data-aos-delay="100">
                                                                                    <div class="pic"><img
                                                                                            src="images/departemen5/user.png"
                                                                                            class="img-fluid"
                                                                                            alt=""></div>
                                                                                    <div class="member-info">
                                                                                        <h4>Nur</h4>
                                                                                        <span>Wakil Dept Perempuan
                                                                                            &
                                                                                            Buruh Anak
                                                                                        </span>
                                                                                        <div class="social">
                                                                                            <a href=""><i
                                                                                                    class="bi bi-twitter"></i></a>
                                                                                            <a href=""><i
                                                                                                    class="bi bi-facebook"></i></a>
                                                                                            <a href=""><i
                                                                                                    class="bi bi-instagram"></i></a>
                                                                                            <a href=""><i
                                                                                                    class="bi bi-linkedin"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                        <!-- Akhir Anggota Perempuan & Buruh Anak -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </li>

                                                <!-- Departemen Hukum & Advokasi -->
                                                <li>
                                                    <div>
                                                        <div class="thumb">
                                                            <div class="row">
                                                                <div class="col-lg-6 align-self-center">
                                                                    <div class="left-text">
                                                                        <h4>Departemen Hukum & Advokasi</h4>
                                                                        <p>Departemen Hukum & Advokasi Merupakan salah
                                                                            satu
                                                                            departemen yang ada di SBGTS-GSBI PT.
                                                                            Victory Chingluh Indonesia</p>
                                                                        <h6>Visi</h6>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur
                                                                            adipisicing elit, sed do eiusmod
                                                                            tempor incididunt ut labore et dolore magna
                                                                            aliqua. Ut enim ad minim veniam,
                                                                            quis nostrud exercitation ullamco laboris
                                                                            nisi ut aliquip ex ea commodo
                                                                            consequat.</p>
                                                                        <h6>Misi</h6>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur
                                                                            adipisicing elit, sed do eiusmod
                                                                            tempor incididunt ut labore et dolore magna
                                                                            aliqua. Ut enim ad minim veniam,
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 align-self-center">
                                                                    <div
                                                                        class="owl-departemen-item owl-carousel departemen-carousel">

                                                                        <div class="item">
                                                                            <!-- Awal Kepala Departemen Hukum & Advokasi -->
                                                                            <a href="#">
                                                                                <div class="member" data-aos="zoom-in"
                                                                                    data-aos-delay="400">
                                                                                    <div class="pic"><img
                                                                                            src="images/departemen5/user.png"
                                                                                            class="img-fluid"
                                                                                            alt=""></div>
                                                                                    <div class="member-info">
                                                                                        <h4>M. Hasan Azazi</h4>
                                                                                        <span>Kep. Dept Hukum &
                                                                                            Advokasi</span>
                                                                                        <div class="social">
                                                                                            <a href=""><i
                                                                                                    class="bi bi-twitter"></i></a>
                                                                                            <a href=""><i
                                                                                                    class="bi bi-facebook"></i></a>
                                                                                            <a href=""><i
                                                                                                    class="bi bi-instagram"></i></a>
                                                                                            <a href=""><i
                                                                                                    class="bi bi-linkedin"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                        <!-- Kepala Departemen Hukum & Advokasi -->

                                                                        <div class="item">
                                                                            <!-- Awal Anggota Hukum & Advokasi -->
                                                                            <a href="#">
                                                                                <div class="member" data-aos="zoom-in"
                                                                                    data-aos-delay="100">
                                                                                    <div class="pic"><img
                                                                                            src="images/departemen5/user.png"
                                                                                            class="img-fluid"
                                                                                            alt=""></div>
                                                                                    <div class="member-info">
                                                                                        <h4>Wiji Santosa</h4>
                                                                                        <span>Wakil Dept Hukum &
                                                                                            Advokasi
                                                                                        </span>
                                                                                        <div class="social">
                                                                                            <a href=""><i
                                                                                                    class="bi bi-twitter"></i></a>
                                                                                            <a href=""><i
                                                                                                    class="bi bi-facebook"></i></a>
                                                                                            <a href=""><i
                                                                                                    class="bi bi-instagram"></i></a>
                                                                                            <a href=""><i
                                                                                                    class="bi bi-linkedin"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                        <!-- Akhir Anggota Hukum & Advokasi -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </li>

                                                <!-- Departemen Organisasi -->
                                                <li>
                                                    <div>
                                                        <div class="thumb">
                                                            <div class="row">
                                                                <div class="col-lg-6 align-self-center">
                                                                    <div class="left-text">
                                                                        <h4>Departemen Organisasi</h4>
                                                                        <p>Departemen Organisasi Merupakan salah satu
                                                                            departemen yang ada di SBGTS-GSBI PT.
                                                                            Victory Chingluh Indonesia</p>
                                                                        <h6>Visi</h6>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur
                                                                            adipisicing elit, sed do eiusmod
                                                                            tempor incididunt ut labore et dolore magna
                                                                            aliqua. Ut enim ad minim veniam,
                                                                            quis nostrud exercitation ullamco laboris
                                                                            nisi ut aliquip ex ea commodo
                                                                            consequat.</p>
                                                                        <h6>Misi</h6>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur
                                                                            adipisicing elit, sed do eiusmod
                                                                            tempor incididunt ut labore et dolore magna
                                                                            aliqua. Ut enim ad minim veniam,
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 align-self-center">

                                                                    <div
                                                                        class="owl-departemen-item owl-carousel departemen-carousel">

                                                                        <div class="item">
                                                                            <!-- Awal Ketua Departemen Organisasi -->
                                                                            <a href="#">
                                                                                <div class="member" data-aos="zoom-in"
                                                                                    data-aos-delay="400">
                                                                                    <div class="pic"><img
                                                                                            src="images/departemen5/user.png"
                                                                                            class="img-fluid"
                                                                                            alt=""></div>
                                                                                    <div class="member-info">
                                                                                        <h4>Heri Widodo</h4>
                                                                                        <span>Kep. Dept
                                                                                            Organisasi</span>
                                                                                        <div class="social">
                                                                                            <a href=""><i
                                                                                                    class="bi bi-twitter"></i></a>
                                                                                            <a href=""><i
                                                                                                    class="bi bi-facebook"></i></a>
                                                                                            <a href=""><i
                                                                                                    class="bi bi-instagram"></i></a>
                                                                                            <a href=""><i
                                                                                                    class="bi bi-linkedin"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </div><!-- Akhir Ketua Departemen Organisasi -->

                                                                        <div class="item">
                                                                            <!-- Awal Anggota Organisasi -->
                                                                            <a href="#">
                                                                                <div class="member" data-aos="zoom-in"
                                                                                    data-aos-delay="100">
                                                                                    <div class="pic"><img
                                                                                            src="images/departemen5/user.png"
                                                                                            class="img-fluid"
                                                                                            alt=""></div>
                                                                                    <div class="member-info">
                                                                                        <h4>Budi Suhendra</h4>
                                                                                        <span>Wakil Dept Organisasi
                                                                                        </span>
                                                                                        <div class="social">
                                                                                            <a href=""><i
                                                                                                    class="bi bi-twitter"></i></a>
                                                                                            <a href=""><i
                                                                                                    class="bi bi-facebook"></i></a>
                                                                                            <a href=""><i
                                                                                                    class="bi bi-instagram"></i></a>
                                                                                            <a href=""><i
                                                                                                    class="bi bi-linkedin"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                        <!-- Akhir Anggota Organisasi -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </li>

                                                <!-- Departemen Diklat & Propaganda -->
                                                <li>
                                                    <div>
                                                        <div class="thumb">
                                                            <div class="row">
                                                                <div class="col-lg-6 align-self-center">
                                                                    <div class="left-text">
                                                                        <h4>Departemen Diklat & Propaganda</h4>
                                                                        <p>Departemen Diklat & Propaganda Merupakan
                                                                            salah satu
                                                                            departemen yang ada di SBGTS-GSBI</p>
                                                                        <h6>Visi</h6>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur
                                                                            adipisicing elit, sed do eiusmod
                                                                            tempor incididunt ut labore et dolore magna
                                                                            aliqua. Ut enim ad minim veniam,
                                                                            quis nostrud exercitation ullamco laboris
                                                                            nisi ut aliquip ex ea commodo
                                                                            consequat.</p>
                                                                        <h6>Misi</h6>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur
                                                                            adipisicing elit, sed do eiusmod
                                                                            tempor incididunt ut labore et dolore magna
                                                                            aliqua. Ut enim ad minim veniam,
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 align-self-center">

                                                                    <div
                                                                        class="owl-departemen-item owl-carousel departemen-carousel">

                                                                        <div class="item">
                                                                            <!-- Awal Kepala Diklat & Propaganda  -->
                                                                            <a href="#">
                                                                                <div class="member" data-aos="zoom-in"
                                                                                    data-aos-delay="400">
                                                                                    <div class="pic"><img
                                                                                            src="images/departemen5/user.png"
                                                                                            class="img-fluid"
                                                                                            alt=""></div>
                                                                                    <div class="member-info">
                                                                                        <h4>Jemirah</h4>
                                                                                        <span>Kep. Dept Diklat &
                                                                                            Propaganda</span>
                                                                                        <div class="social">
                                                                                            <a href=""><i
                                                                                                    class="bi bi-twitter"></i></a>
                                                                                            <a href=""><i
                                                                                                    class="bi bi-facebook"></i></a>
                                                                                            <a href=""><i
                                                                                                    class="bi bi-instagram"></i></a>
                                                                                            <a href=""><i
                                                                                                    class="bi bi-linkedin"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </div><!-- Akhir Kepala Diklat & Propaganda  -->

                                                                        <div class="item">
                                                                            <!-- Awal Anggota Diklat & Propaganda  -->
                                                                            <a href="#">
                                                                                <div class="member" data-aos="zoom-in"
                                                                                    data-aos-delay="100">
                                                                                    <div class="pic"><img
                                                                                            src="images/departemen5/user.png"
                                                                                            class="img-fluid"
                                                                                            alt=""></div>
                                                                                    <div class="member-info">
                                                                                        <h4>Abi Ristu</h4>
                                                                                        <span>Wakil Dept Diklat &
                                                                                            Propaganda
                                                                                        </span>
                                                                                        <div class="social">
                                                                                            <a href=""><i
                                                                                                    class="bi bi-twitter"></i></a>
                                                                                            <a href=""><i
                                                                                                    class="bi bi-facebook"></i></a>
                                                                                            <a href=""><i
                                                                                                    class="bi bi-instagram"></i></a>
                                                                                            <a href=""><i
                                                                                                    class="bi bi-linkedin"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </div><!-- Akhir Anggota Diklat & Propaganda -->

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </li>

                                                <!-- Departemen Pelayanan Masa -->
                                                <li>
                                                    <div>
                                                        <div class="thumb">
                                                            <div class="row">
                                                                <div class="col-lg-6 align-self-center">
                                                                    <div class="left-text">
                                                                        <h4>Departemen Pelayanan Masa</h4>
                                                                        <p>Departemen Pelayanan Masa Merupakan salah
                                                                            satu
                                                                            departemen yang ada di SBGTS-GSBI PT.
                                                                            Victory Chingluh Indonesia</p>
                                                                        <h6>Visi</h6>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur
                                                                            adipisicing elit, sed do eiusmod
                                                                            tempor incididunt ut labore et dolore magna
                                                                            aliqua. Ut enim ad minim veniam,
                                                                            quis nostrud exercitation ullamco laboris
                                                                            nisi ut aliquip ex ea commodo
                                                                            consequat.</p>
                                                                        <h6>Misi</h6>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur
                                                                            adipisicing elit, sed do eiusmod
                                                                            tempor incididunt ut labore et dolore magna
                                                                            aliqua. Ut enim ad minim veniam,
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 align-self-center">

                                                                    <div
                                                                        class="owl-departemen-item owl-carousel departemen-carousel">

                                                                        <div class="item">
                                                                            <!-- Awal Kepala Pelayanan Masa -->
                                                                            <a href="#">
                                                                                <div class="member" data-aos="zoom-in"
                                                                                    data-aos-delay="400">
                                                                                    <div class="pic"><img
                                                                                            src="images/departemen5/user.png"
                                                                                            class="img-fluid"
                                                                                            alt=""></div>
                                                                                    <div class="member-info">
                                                                                        <h4>Nawal Gilang</h4>
                                                                                        <span>Kep. Dept Pelayanan
                                                                                            Masa</span>
                                                                                        <div class="social">
                                                                                            <a href=""><i
                                                                                                    class="bi bi-twitter"></i></a>
                                                                                            <a href=""><i
                                                                                                    class="bi bi-facebook"></i></a>
                                                                                            <a href=""><i
                                                                                                    class="bi bi-instagram"></i></a>
                                                                                            <a href=""><i
                                                                                                    class="bi bi-linkedin"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                        <!-- Akhir Kepala Pelayanan Masa
                                                                                                                                                                                                         -->

                                                                        <div class="item">
                                                                            <!-- Awal Anggota Pelayanan Masa -->
                                                                            <a href="#">
                                                                                <div class="member" data-aos="zoom-in"
                                                                                    data-aos-delay="100">
                                                                                    <div class="pic"><img
                                                                                            src="images/departemen5/user.png"
                                                                                            class="img-fluid"
                                                                                            alt=""></div>
                                                                                    <div class="member-info">
                                                                                        <h4>Andora Lesmana</h4>
                                                                                        <span>Wakil Dept Pelayanan
                                                                                            Masa</span>
                                                                                        <div class="social">
                                                                                            <a href=""><i
                                                                                                    class="bi bi-twitter"></i></a>
                                                                                            <a href=""><i
                                                                                                    class="bi bi-facebook"></i></a>
                                                                                            <a href=""><i
                                                                                                    class="bi bi-instagram"></i></a>
                                                                                            <a href=""><i
                                                                                                    class="bi bi-linkedin"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </div><!-- Akhir Anggota Pelayanan Masa -->
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>

                                                <!-- Departemen Seni Budaya & Olahraga -->
                                                <li>
                                                    <div>
                                                        <div class="thumb">
                                                            <div class="row">
                                                                <div class="col-lg-6 align-self-center">
                                                                    <div class="left-text">
                                                                        <h4>Departemen Seni Budaya & Olahraga</h4>
                                                                        <p>Departemen Seni Budaya & Olahraga< Merupakan
                                                                                salah satu departemen yang ada di SBGTS-GSBI
                                                                                PT. Victory Chingluh Indonesia</p>
                                                                                <h6>Visi</h6>
                                                                                <p>Lorem ipsum dolor sit amet,
                                                                                    consectetur
                                                                                    adipisicing elit, sed do eiusmod
                                                                                    tempor incididunt ut labore et
                                                                                    dolore magna
                                                                                    aliqua. Ut enim ad minim veniam,
                                                                                    quis nostrud exercitation ullamco
                                                                                    laboris
                                                                                    nisi ut aliquip ex ea commodo
                                                                                    consequat.</p>
                                                                                <h6>Misi</h6>
                                                                                <p>Lorem ipsum dolor sit amet,
                                                                                    consectetur
                                                                                    adipisicing elit, sed do eiusmod
                                                                                    tempor incididunt ut labore et
                                                                                    dolore magna
                                                                                    aliqua. Ut enim ad minim veniam,
                                                                                </p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 align-self-center">
                                                                    <div
                                                                        class="owl-departemen-item owl-carousel departemen-carousel">

                                                                        <div class="item">
                                                                            <!-- Awal Kepala Departemen Seni Budaya & Olahraga -->
                                                                            <a href="#">
                                                                                <div class="member" data-aos="zoom-in"
                                                                                    data-aos-delay="400">
                                                                                    <div class="pic"><img
                                                                                            src="images/departemen5/user.png"
                                                                                            class="img-fluid"
                                                                                            alt=""></div>
                                                                                    <div class="member-info">
                                                                                        <h4>Zerico SH</h4>
                                                                                        <span>Kep. Dept Seni Budaya &
                                                                                            Olahraga< </span>
                                                                                                <div class="social">
                                                                                                    <a href=""><i
                                                                                                            class="bi bi-twitter"></i></a>
                                                                                                    <a href=""><i
                                                                                                            class="bi bi-facebook"></i></a>
                                                                                                    <a href=""><i
                                                                                                            class="bi bi-instagram"></i></a>
                                                                                                    <a href=""><i
                                                                                                            class="bi bi-linkedin"></i></a>
                                                                                                </div>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                        <!-- Akhir Kepala Departemen Seni Budaya & Olahraga -->

                                                                        <div class="item">
                                                                            <!-- Awal Anggota Seni Budaya & Olahraga -->
                                                                            <a href="#">
                                                                                <div class="member" data-aos="zoom-in"
                                                                                    data-aos-delay="100">
                                                                                    <div class="pic"><img
                                                                                            src="images/departemen5/user.png"
                                                                                            class="img-fluid"
                                                                                            alt=""></div>
                                                                                    <div class="member-info">
                                                                                        <h4>Qodarsyah</h4>
                                                                                        <span>Wakil Dept Seni Budaya &
                                                                                            Olahraga< </span>
                                                                                                <div class="social">
                                                                                                    <a href=""><i
                                                                                                            class="bi bi-twitter"></i></a>
                                                                                                    <a href=""><i
                                                                                                            class="bi bi-facebook"></i></a>
                                                                                                    <a href=""><i
                                                                                                            class="bi bi-instagram"></i></a>
                                                                                                    <a href=""><i
                                                                                                            class="bi bi-linkedin"></i></a>
                                                                                                </div>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                        <!-- Akhir Anggota Seni Budaya & Olahraga -->

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!--  Akhir Structure Section -->

    <!--   Awal Berita Acara Section -->
    <div id="artikel" class="artikel">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 " data-aos="fade-in">
                    <div class="section-heading">
                        <h6>Berita Acara</h6>
                        <h4>Informasi Terbaru dari <em>Kami</em></h4>
                        <div class="line-dec"></div>
                    </div>
                </div>
                <div class="col-lg-6 show-up " data-aos="fade-up" data-aos-delay="400">
                    <div class="artikel-post">
                        <div class="thumb">
                            <a href="{{ url('lihat-artikel') }}"><img src="images/artikel/Perjuangan Upah 2023.png"
                                    alt=""></a>
                        </div>
                        <div class="down-content">
                            <span class="category"></span>
                            <span class="date">06 Desember 2022</span>
                            <a href="{{ url('lihat-artikel') }}">
                                <h4>Aksi perjuangan upah tahun 2023
                                    KP3B</h4>
                            </a>
                            <p>awan-kawan SBGTS-GSBI PT VCI melakukan briefing sembari menunggu PLT Gubernur Banten
                                menandatangani SK pengajuan kenaikan upah tahun 2023</p>
                            <span class="author"><img src="images/Fatur.png" alt="">By: Fatur Roman
                                Setiyono</span>
                            <div class="border-first-button"><a href="{{ url('lihat-artikel') }}">Lebih Banyak</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="artikel-posts">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="post-item">
                                    <div class="thumb">
                                        <a href="{{ url('lihat-artikel') }}"><img src="images/artikel/Relawan Sosial.png"
                                                alt=""></a>
                                    </div>
                                    <div class="right-content">
                                        <span class="category"></span>
                                        <span class="date">Tangerang, 22 November 2022</span>
                                        <a href="{{ url('lihat-artikel') }}">
                                            <h4>Pemberian Piagam Penghargaan</h4>
                                        </a>
                                        <p>PTP. SBGTS-GSBI PT. Victory Chingluh Indonesia ( Suwandi Hekkindo S.H ) melakukan
                                            Pelepasan Team Relawan Unit Reaksi Cepat Pelayanan Massa...</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="post-item">
                                    <div class="thumb">
                                        <a href="{{ url('lihat-artikel') }}"><img
                                                src="images/artikel/Aliansi Aksi Sejuta Buruh.png" alt=""></a>
                                    </div>
                                    <div class="right-content">
                                        <span class="category"></span>
                                        <span class="date">Jakarta, 10 Oktober 2022</span>
                                        <a href="{{ url('lihat-artikel') }}">
                                            <h4>Aliansi Aksi Sejuta Buruh</h4>
                                        </a>
                                        <p>Tidak ada kemenangan yang diraih dengan mudah, tetap semangat...</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="post-item last-post-item">
                                    <div class="thumb">
                                        <a href="{{ url('lihat-artikel') }}"><img src="images/artikel/Genta.png"
                                                alt=""></a>
                                    </div>
                                    <div class="right-content">
                                        <span class="category"></span>
                                        <span class="date">Gn. Ciremai 13-16 Agustus 2022</span>
                                        <a href="{{ url('lihat-artikel') }}">
                                            <h4>Mountainering Konservasi</h4>
                                        </a>
                                        <p>Mountainering Konservasi dan Edukasi bersma Genta Seribu...
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--   Akhir Berita Section  -->

    <!--  Awal Kontak Section  -->
    <div id="contact" class="contact-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading" data-aos="fade-in" data-aos-delay="400">
                        <h6>Kontak</h6>
                        <h4>Kirim kan Pesan ke Kami <em>Sekarang</em></h4>
                        <div class="line-dec"></div>
                    </div>
                </div>
                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="500">
                    <form id="contact" action="" method="post">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="contact-dec">
                                    <img src="images/kontak/kontak-hp.png" alt="user pegang hp">
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div id="map">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.636703827144!2d106.53119728477068!3d-6.179359057116612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e42018513fe6197%3A0x605fd64d5e1c1a3f!2sSBGTS%20-%20GSBI%20PT.%20VCI!5e0!3m2!1sid!2sid!4v1643468610071!5m2!1sid!2sid"
                                        width="100%" height="636px" style="border:0;" allowfullscreen=""
                                        loading="lazy"></iframe>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="fill-form">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="info-post">
                                                <div class="icon">
                                                    <img src="images/icon/phone-icon.png" alt="">
                                                    <a href="tel:081377754080">0823-1030-4933</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="info-post">
                                                <div class="icon">
                                                    <img src="images/icon/email-icon.png" alt="">
                                                    <a href="mailto:sudden_developers@gmail.com">SBGTS-GSBI</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="info-post">
                                                <div class="icon">
                                                    <img src="images/icon/location-icon.png" alt="">
                                                    <a href="https://goo.gl/maps/HVuWub9uTMRKtYku5"
                                                        target="_blank">SBGTS-GSBI PT. VCI</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <fieldset>
                                                <input type="name" name="name" id="name"
                                                    placeholder="Nama Lengkap" autocomplete="on" required>
                                            </fieldset>
                                            <fieldset>
                                                <input type="text" name="email" id="email"
                                                    pattern="[^ @]*@[^ @]*" placeholder="Email" required="">
                                            </fieldset>
                                            <fieldset>
                                                <input type="subject" name="subject" id="subject"
                                                    placeholder="Subject" autocomplete="on">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-6">
                                            <fieldset>
                                                <textarea name="message" type="text" class="form-control" id="message" placeholder="Pesan" required=""></textarea>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12">
                                            <fieldset>
                                                <button type="submit" id="form-submit" class="main-button ">Kirim
                                                    Pesan Sekarang</button>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--  Akhir Kontak Section -->
@endsection
