<div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
            <div class="sidebar-brand-icon">
                <img src="{{ asset('images/GSBI_Indonesia-removebg-preview.png') }}" alt="" width="50px">
            </div>
            <div class="sidebar-brand-text mx-3">SBGTS-GSBI PT. VCI</div>
        </a>

        <!-- Garis -->
        <hr class="sidebar-divider">

        <!-- Nav Item Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin-dashboard') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>
        @if (auth()->user()->role == 'admin')
            <!-- Garis -->
            <hr class="sidebar-divider">
        @endif

        <!-- Awal Sidebar Admin -->
        @if (auth()->user()->role == 'admin')
            <!-- Nav Item Data Anggota -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin-data-anggota') }}">
                    <i class="fas fa-users"></i>
                    <span>Data Anggota</span></a>
            </li>
            <!-- Garis -->
            <hr class="sidebar-divider">
        @endif

        @if (auth()->user()->role == 'admin')
            <!-- Nav Item Data Pengurus -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin-data-pengurus') }}">
                    <i class="fas fa-users-cog"></i>
                    <span>Data Pengurus</span></a>
            </li>
        @endif

        <!-- Garis -->
        <hr class="sidebar-divider">

        @if (auth()->user()->role == 'admin')
            <!-- Nav Item Data Kategori -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin-data-kategori') }}">
                    <i class="fa fa-list-ul"></i>
                    <span>Kategori</span></a>
            </li>
            <!-- Garis -->
            <hr class="sidebar-divider">
        @endif

        @if (auth()->user()->role == 'admin')
            <!-- Nav Item Data Berita Acara -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin-data-artikel') }}">
                    <i class="fas fa-newspaper"></i>
                    <span>Berita Acara</span></a>
            </li>
            <!-- Garis -->
            <hr class="sidebar-divider">
        @endif
        <!-- Akhir Sidebar Admin -->


        <!-- Awal Sidebar User -->
        @if (auth()->user()->role == 'user')
            <!-- Nav Item Cetak KTA -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('user-kta') }}">
                    <i class="fa fa-id-card" aria-hidden="true"></i>
                    <span>KTA Digital</span></a>
            </li>
            <!-- Garis -->
            <hr class="sidebar-divider">
        @endif

        @if (auth()->user()->role == 'user')
            <!-- Nav Item Data Berita Acara -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('user-ubah-password') }}">
                    <i class="fa fa-key" aria-hidden="true"></i>
                    <span>Ubah Password</span></a>
            </li>
            <!-- Garis -->
            <hr class="sidebar-divider">
        @endif
        <!-- Akhir Sidebar User -->

        <!-- Awal Sidebar Ketua -->
        @if (auth()->user()->role == 'ketua')
            <!-- Nav Item Data Berita Acara -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('ketua-data-anggota') }}">
                    <i class="fas fa-users"></i>
                    <span>Data Anggota</span></a>
            </li>
            <!-- Garis -->
            <hr class="sidebar-divider">
        @endif

        @if (auth()->user()->role == 'ketua')
            <!-- Nav Item Data Berita Acara -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('ketua-data-pengurus') }}">
                    <i class="fas fa-users-cog"></i>
                    <span>Data Pengurus</span></a>
            </li>
            <!-- Garis -->
            <hr class="sidebar-divider">
        @endif

        @if (auth()->user()->role == 'ketua')
            <!-- Nav Item Data Berita Acara -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('data-users') }}">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <span>Data Users</span></a>
            </li>
            <!-- Garis -->
            <hr class="sidebar-divider">
        @endif

        @if (auth()->user()->role == 'ketua')
            <!-- Nav Item Cetak KTA -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('ketua-kta') }}">
                    <i class="fa fa-id-card" aria-hidden="true"></i>
                    <span>KTA Digital</span></a>
            </li>
            <!-- Garis -->
            <hr class="sidebar-divider">
        @endif

        @if (auth()->user()->role == 'ketua')
            <!-- Nav Item Data Berita Acara -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('ketua-ubah-password') }}">
                    <i class="fa fa-key" aria-hidden="true"></i>
                    <span>Ubah Password</span></a>
            </li>
            <!-- Garis -->
            <hr class="sidebar-divider">
        @endif
        <!-- Akhir Sidebar Ketua -->

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->
</div>
