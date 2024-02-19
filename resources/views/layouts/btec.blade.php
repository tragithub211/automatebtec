<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ config('app.name', 'Battambang Teacher Education College - BTEC') }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/logo/favicon.ico') }}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom-animation.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon_xoft.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome-pro.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <style type="text/css">
        .text-btec-gold{color:#EDC64A !important;}
        .it-footer-top-text a{font-size:18px !important;}
    </style>
</head>

<body>

    <!-- preloader -->
    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- preloader end  -->

    <!-- back-to-top-start  -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="far fa-angle-double-up"></i>
    </button>
    <!-- back-to-top-end  -->

    <!-- it-offcanvus-area-start -->
    @include('layouts.offcanvas')

    <header class="it-header-height">

        <!-- header-top-area-start -->
        @include('layouts.header_top')
        <!-- header-top-area-end -->

        <!-- header-area-start -->
        @include('layouts.header_nav')
        <!-- header-area-end -->

   </header>

   <main>

        <!-- slider-area-start -->
        @if(Route::is('pages.home'))
        @include('layouts.slider')
        @endif
        <!-- slider-area-end -->

        {{ $slot }}

   </main>

    <footer>
        <!-- footer-area-start -->
        @include('layouts.footer')

        <!-- copy-right area start -->
        <div class="it-copyright-area it-copyright-height">
            <div class="container">
                <div class="row">
                    <div class="col-12 wow itfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                        <div class="it-copyright-text text-center">
                            <p>Copyright © 2023 <a href="{{ route('pages.home') }}" style="color:#169CD1;">{{ config('app.name', 'BTEC') }} </a> || All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- copy-right area end -->
    </footer>

    <!-- JS here -->
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/js/purecounter.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/countdown.js') }}"></script>
    <script src="{{ asset('assets/js/nice-select.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.js') }}"></script>
    <script src="{{ asset('assets/js/isotope-pkgd.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded-pkgd.js') }}"></script>
    <script src="{{ asset('assets/js/ajax-form.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>