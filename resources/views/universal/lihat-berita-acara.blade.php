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

        < <!-- our blog -->
            <div id="blog" class="blog">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="blog-box">
                                <figure><a href="https://www.infogsbi.or.id/"><img src="images/berita acara/Relawan.png"
                                            alt="#"></a>
                                    <span>12 Agustus 2022</span>
                                </figure>
                                <div class="travel">
                                </div>
                                <h3>Tim Relawan GSBI</h3>
                                <p>Kawan-kawan relawan berinteraksi dengan warga yang terdampak bencana alam gempa bumi di
                                    Kp. Pasir Peundeuy Desa. Talaga Kec. Cugenang di hari ke 2 tim relawan SBGTS-GSBI PT VCI
                                    Peduli Cianjur membantu evakuasi sebuah mobil truk towing yang terperosok akibat tanah
                                    longsor di Tapal Kuda, Cugenang - Cianjur, Kemudian Tim relawan SBGTS-GSBI PT VCI ikut
                                    serta dalam evakuasi korban tanah longsor di Tapal Kuda akibat gempa bumi di Cianjur.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            </div>
            <!-- end our blog -->

            <!-- Awal Ini Partials Footer -->
            @include('layouts-universal.partials-universal.footer')
            <!-- Akhir Ini Partials Footer -->


    </body>
@endsection
