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
                        <div class="row">
                            @foreach ($artikels as $artikel)
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="blog-box">
                                        <figure><a href="{{ route('lihat-berita-acara') }}"><img
                                                    src="{{ asset('storage/public/' . $artikel->file) }}"
                                                    alt="#" /></a>
                                            <span>{{ date('d M Y', strtotime($artikel->created_at)) }}</span>
                                        </figure>
                                        <div class="travel">
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
            </div>
            </div>
            <!-- end our blog -->

            <!-- Awal Ini Partials Footer -->
            @include('layouts-universal.partials-universal.footer')
            <!-- Akhir Ini Partials Footer -->


    </body>
@endsection
