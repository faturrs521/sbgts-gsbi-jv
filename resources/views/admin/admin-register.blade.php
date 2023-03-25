@extends('layouts-admin.main')
@section('layout-utama')

    <body class="bg-gradient-primary">
        <br><br>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-6 d-none d-lg-block"></div>
                                <div class="col-lg-12">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Register</h1>
                                        </div>
                                        <form action="/register-user" method="POST" enctype="multipart/form-data"
                                            class="user">
                                            @csrf
                                            <div class="form-group">
                                                <input type="number" class="form-control form-control-user" name="nik"
                                                    autocomplete="off" placeholder="Masukan NIK">
                                                @error('nik')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" name="nama"
                                                    autocomplete="off" placeholder="Masukan Nama">
                                                @error('nama')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <input type="file" name="foto" class="form-control" autocomplete="off"
                                                    accept="image/">
                                                @error('foto')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1" class="form-label">Gender</label>
                                                <select class="form-control" name="jeniskelamin"
                                                    aria-label="Default select example">
                                                    @error('jeniskelamin')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                    <option selected>Pilih Gender</option>
                                                    <option value="pria">Pria</option>
                                                    <option value="wanita">Wanita</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" name="jabatan"
                                                    autocomplete="off" placeholder="Masukan Jabatan">
                                                @error('jabatan')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user"
                                                    placeholder="Masukan Password" name="password" autocomplete="off">
                                                @error('password')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <button type="submit"
                                                class="btn btn-primary btn-user btn-block">Submit</button>
                                            <hr>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
@endsection
