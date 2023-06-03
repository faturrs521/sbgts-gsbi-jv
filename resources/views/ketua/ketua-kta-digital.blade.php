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
                            <div class="container mt-5">
                                <div class="row justify-content-center">
                                    <div class="col-md-8">
                                        <div class="card">
                                            <div class="card-header">Data Anggota</div>
                                            <div class="card-body">
                                                <form action="/ketua-export-pdf-kta" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="naik">Nik</label>
                                                        <input type="text" class="form-control" name="nik"
                                                            id="nik" placeholder="Nik Anda" readonly
                                                            value="{{ $user['nik'] }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nama">Nama</label>
                                                        <input type="text" class="form-control" name="nama" readonly
                                                            id="nama" placeholder="Nama Anda"
                                                            value="{{ $user['nama'] }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nama">Gender</label>
                                                        <input type="text" class="form-control" name="jeniskelamin"
                                                            id="nama" placeholder="Gender" readonly
                                                            value="{{ $user['jeniskelamin'] }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nama">Jabatan</label>
                                                        <input type="text" class="form-control" name="jabatan"
                                                            id="nama" placeholder="Jabatan" readonly
                                                            value="{{ $user['jabatan'] }}">
                                                    </div>
                                                    <!-- Awal Export PDF -->
                                                    <a href="{{ route('ketua-export-pdf-kta') }}" class="btn btn-primary">
                                                        <i class="fa fa-id-card" aria-hidden="true"></i>
                                                        Cetak KTA</a>
                                                    <!-- Akhir Export PDF -->
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
