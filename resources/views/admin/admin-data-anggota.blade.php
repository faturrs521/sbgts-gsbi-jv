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
                        <h1 class="h3 mb-4 text-gray-800 text-center">Data Anggota SBGTS-GSBI PT. Victory Chingluh Indonesia
                        </h1>
                        <a href="{{ route('admin-tambah-data-anggota') }}" type="button" class="btn btn-primary">
                            <i class="fas fa-plus"></i>
                            Tambah Data</a>
                        <br>

                        {{-- @if ($message = Session::get('success'))
                            <div class="alert alert-success" role="alert">
                                {{ $message }}
                            </div>
                        @endif --}}
                        <!-- Awal Cari Data -->

                        <div class="row g-3 align-items-center">
                            <div class="col-auto">
                                <form action="{{ route('admin-data-anggota') }}" method="GET">
                                    <input type="search" id="" class="form-control" name="search"
                                        placeholder="Cari Nama" autocomplete="off">
                                </form>
                            </div>
                            <div class="col-auto">
                                <a href="{{ route('admin-export-pdf') }}" type="button" class="btn btn-info">
                                    <i class="fas fa-file-pdf"></i>
                                    Export PDF</a>
                            </div>
                            <div class="col-auto">
                                <a href="{{ route('admin-export-excel') }}" type="button" class="btn btn-success">
                                    <i class="fas fa-file-pdf"></i>
                                    Export Excel</a>
                            </div>
                            <div class="col-auto">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModal">
                                    Import Excel
                                </button>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{ route('admin-import-excel') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <input type="file" name="file" required>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Pilih</button>
                                            </div>
                                    </div>
                                    </form>
                                </div>
                            </div>











                            <br><br><br>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nik</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Gender</th>
                                        <th scope="col">Kode DEPT</th>
                                        <th scope="col">DEPT</th>
                                        <th scope="col">TMK</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($dataAnggota as $index => $row)
                                        <tr>
                                            <th scope="row">{{ $index + $dataAnggota->firstItem() }}</th>
                                            <td>0{{ $row->nik }}</td>
                                            <td>{{ $row->nama }}</td>
                                            <td>{{ $row->jeniskelamin }}</td>
                                            <td>{{ $row->kodedept }}</td>
                                            <td>{{ $row->dept }}</td>
                                            <td>{{ $row->tmk }}</td>
                                            <td>
                                                <a href="{{ route('admin-tampil-data-anggota', $row->id) }}"
                                                    class="btn btn-warning fas fa-edit"></a>
                                                <button type="submit" class="btn btn-danger fas fa-trash-alt"
                                                    onclick="deleteData({{ $row->id }})"></button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $dataAnggota->links() }}
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
