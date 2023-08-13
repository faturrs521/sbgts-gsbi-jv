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
                        <h1 class="h3 mb-4 text-gray-800 text-center">Ubah Data Anggota SBGTS-GSBI PT. Victory Chingluh
                            Indonesia
                        </h1>

                        <div class="card">
                            <div class="cardbody">
                                <form action="/ubah-data-anggota/{{ $ubah->id }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">NIK</label>
                                        <input type="number" name="nik" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" autocomplete="off" value="{{ $ubah->nik }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                                        <input type="text" name="nama" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" autocomplete="off" value="{{ $ubah->nama }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Gender</label>
                                        <select class="form-control" name="jeniskelamin"
                                            aria-label="Default select example">
                                            <option selected>{{ $ubah->jeniskelamin }}</option>
                                            <option value="pria">Pria</option>
                                            <option value="wanita">Wanita</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Kode Dept.</label>
                                        <input type="text" name="kodedept" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" autocomplete="off" value="{{ $ubah->kodedept }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">DEPT</label>
                                        <input type="text" name="dept" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" autocomplete="off" value="{{ $ubah->dept }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">TMK</label>
                                        <input type="text" name="tmk" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" autocomplete="off" value="{{ $ubah->tmk }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Gender</label>
                                        <select class="form-control" name="status" aria-label="Default select example">
                                            <option selected>{{ $ubah->status }}</option>
                                            <option value="aktif">Aktif</option>
                                            <option value="non aktif">Non Aktif</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Ubah</button>
                                </form>
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
