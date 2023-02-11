<!doctype html>
<html lang="en">


<!-- Awal Ini Partials Style -->
@include('layouts.Partials.style')
<!-- Akhir Ini Partials Style -->

<body>
    <!-- Awal Pre-Header -->
    <div id="pre-header" class="pre-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-sm-8 col-8">
                    <ul class="info">
                        <li><a href="mailto:sudden_developers@gmail.com"><i
                                    class="fa fa-envelope"></i>gsbi.jv@chingluh.com</a></li>
                        <li><a href="tel:081377754080"><i class="fa fa-phone"></i>0823-1030-4933</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-sm-4 col-4">
                    <ul class="social-media">
                        <!-- Facebook -->
                        <li><a style="color: #2b2b2b;" href="#!" role="button"><i
                                    class="fab fa-facebook fa-lg"></i>
                            </a></li>

                        <!-- Twitter -->
                        <li><a style="color: #2b2b2b;" href="#!" role="button"><i
                                    class="fab fa-twitter fa-lg"></i>
                            </a></li>

                        <!-- Google -->
                        <li><a style="color: #2b2b2b;" href="#!" role="button"><i class="fab fa-google fa-lg"></i>
                            </a></li>

                        <!-- Instagram -->
                        <li><a style="color: #2b2b2b;" href="#!" role="button"><i
                                    class="fab fa-instagram fa-lg"></i>
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Pre-header -->

    <!-- Awal Ini Partials Navbar -->
    @include('layouts.Partials.navbar')
    <!-- Akhir Ini Partials Navbar -->


    <!-- Awal Ini Layout Utama -->
    <div class="layout-utama">
        @yield('layout-utama')
    </div>
    <!-- Akhir Ini Layout Utama -->

    <!-- Awal Ini Partials Footer -->
    @include('layouts.Partials.footer')
    <!-- Akhir Ini Partials Footer -->

    <!-- Awal Ini Partials Script -->
    @include('layouts.Partials.script')
    <!-- Akhir Ini Partials Script -->



</body>

</html>
