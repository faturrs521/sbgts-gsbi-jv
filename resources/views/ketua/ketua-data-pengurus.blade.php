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
                        <h1 class="h3 mb-4 text-gray-800 text-center">Data Pengurus SBGTS-GSBI PT. Victory Chingluh Indonesia
                            2022-2025
                        </h1>
                        <div class="row g-3 align-items-center">
                            <!-- Awal Cari Data -->
                            <div class="col-auto">
                                <form action="{{ route('admin-data-pengurus') }}" method="GET">
                                    <input type="search" id="" class="form-control" name="search"
                                        placeholder="Cari Nama" autocomplete="off">
                                </form>
                            </div>
                            <!-- Akhir Cari Data -->
                            <!-- Awal Export PDF -->
                            <div class="col-auto">
                                <a href="{{ route('ketua-export-pdf-data-pengurus') }}" class="btn btn-danger">
                                    <i class="fas fa-file-pdf"></i>
                                    Export PDF</a>
                            </div>
                            <!-- Akhir Export PDF -->
                            <!-- Awal Export Excel -->
                            <div class="col-auto">
                                <a href="{{ route('ketua-export-excel-data-pengurus') }}" type="button"
                                    class="btn btn-success">
                                    <i class="fas fa-file-excel"></i>
                                    Export Excel</a>
                            </div>
                            <br><br><br>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nik</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Foto</th>
                                        <th scope="col">Gender</th>
                                        <th scope="col">Jabatan</th>
                                        <th scope="col">DEPT</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($dataPengurus as $index => $row)
                                        <tr>
                                            <th scope="row">{{ $index + $dataPengurus->firstItem() }}</th>
                                            <td>0{{ $row->nik }}</td>
                                            <td>{{ $row->nama }}</td>
                                            <td>
                                                <img src="{{ asset('storage/public/' . $row->foto) }}" alt=""
                                                    style="width: 40px;">
                                            </td>
                                            <td>{{ $row->jeniskelamin }}</td>
                                            <td>{{ $row->jabatan }}</td>
                                            <td>{{ $row->dept }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $dataPengurus->links() }}
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
