@extends('layouts-universal.main')
@section('layout-utama')
    <!-- body -->

    <body class="main-layout">
        <!-- loader  -->
        <div class="loader_bg">
            <div class="loader"><img src="images/loading.gif" alt="#" /></div>
        </div>
        <!-- end loader -->

        <!-- Awal Ini Partials Navbar -->
        @include('layouts-universal.partials-universal.navbar')
        <!-- Akhir Ini Partials Sidebar -->

        < <!-- our blog -->
            <div id="blog" class="blog">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="blog-box">
                                <figure><a href="https://www.infogsbi.or.id/"><img
                                            src="{{ asset('storage/public/' . $artikels->file) }}" alt="#" /></a>
                                    <span>{{ date('d M Y', strtotime($artikels->created_at)) }}</span>
                                </figure>
                                <div class="travel">
                                </div>
                                <h3>{{ $artikels->judul }}</h3>
                                <p> {{ $artikels->deskripsi }}</p>
                            </div>
                        </div>
                    </div>
                    <div id="disqus_thread" class="mt-4"></div>
                    <script>
                        /**
                         *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                         *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
                        /*
                        var disqus_config = function () {
                        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                        };
                        */
                        (function() { // DON'T EDIT BELOW THIS LINE
                            var d = document,
                                s = d.createElement('script');
                            s.src = 'https://gsbi-jv.disqus.com/embed.js';
                            s.setAttribute('data-timestamp', +new Date());
                            (d.head || d.body).appendChild(s);
                        })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments
                            powered by Disqus.</a></noscript>
                </div>
            </div>
            </div>
            <!-- end our blog -->

            <!-- Awal Ini Partials Footer -->
            @include('layouts-universal.partials-universal.footer')
            <!-- Akhir Ini Partials Footer -->


    </body>
@endsection
