@extends('layouts.main')
@section('layout-utama')

    <body>
        <section class="artikel-landing-page" id="artikel-landing">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="artikel-landing-page">
                                    <div class="thumb">
                                        <div class="date">
                                            <h6>Des <span>06</span></h6>
                                        </div>

                                        <a href="#"><img src="images/artikel/Perjuangan Upah 2023.png"
                                                alt=""></a>
                                    </div>
                                    <div class="down-content">
                                        <a href="#">
                                            <h4>Aksi perjuangan upah tahun 2023 KP3B</h4>
                                        </a>
                                        <p>KP3B, 06 Desember 2022
                                        </p>
                                        <p class="description">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis
                                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                            culpa qui officia deserunt mollit anim id est laborum.

                                            <br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                            dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                                            sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </p>
                                        <div class="col-lg-12">
                                            <div class="share">
                                                <h5>Share:</h5>
                                                <ul>
                                                    <li><a href="#">Facebook</a>,</li>
                                                    <li><a href="#">Twitter</a>,</li>
                                                    <li><a href="#">Linkedin</a>,</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="main-button-golden">
                                <a href="{{ url('/') }}">Kembali ke halaman Beranda</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!-- Akihr Top Section  -->
    @endsection
