<!DOCTYPE html>
<html lang="en">

<!-- Awal Ini Partials Style -->
@include('layouts-universal.partials-universal.style')
<!-- Akhir Ini Partials Style -->

<!-- body -->

<body class="main-layout">
    <div class="layout-utama">
        @yield('layout-utama')
    </div>

    <!-- Awal Ini Partials Script -->
    @include('layouts-universal.partials-universal.script')
    <!-- Awal Ini Partials Script -->
</body>


</html>
