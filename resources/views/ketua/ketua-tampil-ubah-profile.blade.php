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
                                            <div class="card-header">Ubah Profile</div>
                                            <div class="card-body">
                                                <form action="/ketua-ubah-profile" method="POST"
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
                                                        <input type="text" class="form-control" name="nama"
                                                            id="nama" placeholder="Nama Anda"
                                                            value="{{ $user['nama'] }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <p><img src="{{ asset('storage/public/' . Auth::user()->foto) }}"
                                                                alt="" class="img-thumbnail" width="100px"></p>
                                                        <label for="exampleInputEmail1" class="form-label">Gambar</label>
                                                        <input type="file" name="foto" class="form-control"
                                                            id="foto" value="{{ $user['foto'] }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">Gender</label>
                                                        <select class="form-control" name="jeniskelamin"
                                                            aria-label="Default select example">
                                                            <option selected>{{ $user->jeniskelamin }}</option>
                                                            <option value="pria">Pria</option>
                                                            <option value="wanita">Wanita</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nama">Jabatan</label>
                                                        <input type="text" class="form-control" name="jabatan"
                                                            id="nama" placeholder="Jabatan" readonly
                                                            value="{{ $user['jabatan'] }}">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Ubah</button>
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
