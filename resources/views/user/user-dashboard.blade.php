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
                        <!-- Awal Tentang GSBI -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Tentang GSBI</h6>
                            </div>
                            <div class="card-body">
                                <p align="justify">GSBI adalah organisasi Pusat Perjuangan Buruh dari berbagai macam bentuk
                                    organisasi
                                    serikat suruh sektoral dan non-sektoral yang independen, militan, patriotik dan
                                    demokratis. GSBI terbentuk dan lahir dalam semangat persatuan dan dalam gelora
                                    perjuangan rakyat untuk perubahan untuk menggulingkan rezim otoriter Soeharto untuk
                                    demokrasi sejati. GSBI didirikan untuk bekerja dan berjuang mempersatukan kaum buruh dan
                                    serikat buruh-serikat buruh, mengkonsolidasikan organisasi serikat-serikat buruh,
                                    memimpin langkah-langkah perjuangan yang rapat dan kompak bersatu, serta memelihara
                                    setia kawan [solidaritas] dalam praktek dikalangan segenap kaum buruh dalam garis
                                    serikat buruh sejati yang Independen, militan, patriotik dan demokratis, untuk membela,
                                    melindungi, mempromosikan dan memperjuangkan hak dan kepentingan kaum buruh untuk
                                    mendapatkan pekerjaan, upah yang layak, jaminan sosial, kondisi kerja dan syarat-syarat
                                    kerja yang manusiawi, hak untuk kebebasan serikat buruh, berunding secara kolektif, hak
                                    untuk mogok, untuk demokrasi dan solidaritas internasional untuk perdamaian diantara
                                    bangsa-bangsa. Untuk memastikan dan mewujudkan partisipasi kaum buruh yang nyata dalam
                                    perjuangan demokratis nasional, pekerjaan serta kehidupan berbangsa dan bernegara.
                                    Organisasi GSBI bersifat Independen, terbuka, militan, nasional patriotik, demokratis,
                                    dan bertangung jawab serta tidak menjadi bagian atau onderbouw dari salah satu partai
                                    politik. Sedangkan Bentuk dari organisasi GSBI adalah organisasi Pusat Perjuangan Buruh
                                    [vakksentral] dari berbagai macam bentuk organisasi serikat buruh sektoral dan
                                    non-sektoral. Organisasi GSBI berazaskan Pancasila dan Undang-Undang Dasar 1945 serta
                                    Solidaritas Buruh Seluruh Dunia.</p>
                            </div>
                        </div>
                        <!-- Akhir Tentang GSBI -->
                        <!-- Awal Hak Anggota GSBI -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Hak Anggota Dalam Organisasi GSBI</h6>
                            </div>
                            <div class="card-body">
                                <p align="justify">
                                    1. Mendapat bimbingan dan pembelaan menghadapi kasus
                                    perburuhan dalam perjuangan untuk perbaikan nasib kebebasan
                                    berorganisasi. <br>
                                    2. Memilih dan dipilih. <br>
                                    3. Menyampaikan pendapat, usulan, gagasan, kritik,
                                    untuk kemajuan organisasi di rapat dengan cara tertulis ataupun lisan. <br>
                                    4. Ikut berperan serta dalam setiap kegiatan organisasi termasuk ikut mendiskusikan
                                    pelaksanaan keputusan-keputusan organisasi. <br>
                                    5. Menerima pendidikan dan latihan, kursus serta mempunyai hak menulis
                                    di majalah atau penerbitan lainnya yang dikeluarkan oleh organisasi.
                                    6. Mendapatkan Kartu Tanda Anggota [KTA] organisasi. <br>
                                    7. Mendapatkan informasi dari organisasi. <br>
                                    8. Membela diri terhadap sanksi yang di jatuhkan oleh organisasi.
                                </p>
                            </div>
                        </div>
                        <!-- Akhir Hak Anggota GSBI -->
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
