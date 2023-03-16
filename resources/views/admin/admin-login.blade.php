@extends('layouts-admin.main')
@section('layout-utama')

    <body class="bg-gradient-primary">
        <br><br><br><br>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                                <div class="col-lg-12">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Login</h1>
                                        </div>
                                        <form action="/login-proses" method="POST" class="user">
                                            @csrf
                                            <div class="form-group">
                                                <input type="number" class="form-control form-control-user"
                                                    autocomplete="off" name="nik" autocomplete="off"
                                                    placeholder="Mauskan NIK">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control form-control-user"
                                                    id="exampleInputPassword" name="password" autocomplete="off"
                                                    placeholder="Masukan Password Sesuai TMK">
                                            </div>

                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    @foreach ($errors->all() as $error)
                                                        {{ $error }}
                                                    @endforeach
                                                </div>
                                            @endif

                                            <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
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
