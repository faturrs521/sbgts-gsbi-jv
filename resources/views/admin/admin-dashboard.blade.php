@extends('layouts-admin.main')
@section('layout-utama')

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Awal Ini Partials Sidebar -->
            @include('layouts-admin.partials-admin.sidebar')
            <!-- Akhir Ini Partials Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Awal Ini Partials Navbar -->
                    @include('layouts-admin.partials-admin.navbar')
                    <!-- Akhir Ini Partials Sidebar -->

                    <!-- Awal Konten -->
                    <div class="container-fluid">
                        <div class="row">
                            @if (auth()->user()->role == 'admin')
                                <!-- Awal Data Anggota -->
                                <div class="col-xl-3 mb-3">
                                    <div class="card border-left-primary shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <a href="{{ route('admin-data-anggota') }}" class="col mr-2">
                                                    <div class="text-m font-weight-bold text-primary text-uppercase mb-1">
                                                        Data Anggota</div>
                                                </a>
                                                <div class="col-auto">
                                                    <i class="fas fa-users"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Akhir Data Anggota -->

                                <!-- Awal Data Pengurus -->
                                <div class="col-xl-3 mb-3">
                                    <div class="card border-left-success shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <a href="{{ route('admin-data-anggota') }}" class="col mr-2">
                                                    <div class="text-m font-weight-bold text-success text-uppercase mb-1">
                                                        Data Pengurus </div>
                                                </a>
                                                <div class="col-auto">
                                                    <i class="fas fa-users-cog"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Akhir Data Pengurus -->

                                <!-- Awal Data Program Kerja -->
                                <div class="col-xl-3 mb-3">
                                    <div class="card border-left-warning shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <a href="{{ route('admin-data-anggota') }}" class="col mr-2">
                                                    <div class="text-m font-weight-bold text-warning text-uppercase mb-1">
                                                        Data Kategori </div>
                                                </a>
                                                <div class="col-auto">
                                                    <i class="fas fa-building"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Akhir Data Program Kerja -->

                                <!-- Awal Data Artikel -->
                                <div class="col-xl-3 mb-3">
                                    <div class="card border-left-info shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <a href="{{ route('admin-data-anggota') }}" class="col mr-2">
                                                    <div class="text-m font-weight-bold text-info text-uppercase mb-1">
                                                        Data Berita Acara </div>
                                                </a>
                                                <div class="col-auto">
                                                    <i class="fas fa-newspaper"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Akhir Data Artikel -->
                        </div>
                        @endif
                        @if (auth()->user()->role == 'user')
                            <h1>Halaman User</h1>
                        @endif
                    </div>
                </div>
                <!-- Akhir Konten -->

                <!-- Awal Ini Partials Footer -->
                @include('layouts-admin.partials-admin.footer')
            </div>
            <!-- Akhir Ini Partials Footer -->

            <!-- End of Content Wrapper -->
        </div>
        <!-- End of Page Wrapper -->


        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>


    </body>
@endsection
