<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}"> --}}

    <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/libs.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/socialv.css?v=4.0.0') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/remixicon/fonts/remixicon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/vanillajs-datepicker/dist/css/datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css') }}">

    @stack('styles')
</head>

<body class="  ">
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->
    @include('partials.header')

    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Navbar Start -->
        @include('partials.navbar-plain')
        <!-- Navbar End -->

        <!-- Content Start -->
        <div id="content-page" class="content-page">
            @yield('content')
        </div>
        <!-- Content End-->
    </div>
    <!-- Wrapper End-->

    @include('partials.footer')

    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
    <!-- Backend Bundle JavaScript -->
    <script src="{{ asset('assets/js/libs.min.js') }}"></script>
    <!-- slider JavaScript -->
    <script src="{{ asset('assets/js/slider.js') }}"></script>
    <!-- masonry JavaScript -->
    <script src="{{ asset('assets/js/masonry.pkgd.min.js') }}"></script>
    <!-- SweetAlert JavaScript -->
    <script src="{{ asset('assets/js/enchanter.js') }}"></script>
    <!-- SweetAlert JavaScript -->
    <script src="{{ asset('assets/js/sweetalert.js') }}"></script>
    <!-- app JavaScript -->
    <script src="{{ asset('assets/js/charts/weather-chart.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/vendor/vanillajs-datepicker/dist/js/datepicker.min.js') }}"></script>
    <script src="{{ asset('assets/js/lottie.js') }}"></script>

    @stack('scripts')

    <!-- offcanvas start -->

    <div class="offcanvas offcanvas-bottom share-offcanvas" tabindex="-1" id="share-btn"
        aria-labelledby="shareBottomLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="shareBottomLabel">Share</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body small">
            <div class="d-flex flex-wrap align-items-center">
                <div class="text-center me-3 mb-3">
                    <img src="{{ asset('assets/images/icon/08.png') }}" class="img-fluid rounded mb-2" alt="">
                    <h6>Facebook</h6>
                </div>
                <div class="text-center me-3 mb-3">
                    <img src="{{ asset('assets/images/icon/09.png') }}" class="img-fluid rounded mb-2" alt="">
                    <h6>Twitter</h6>
                </div>
                <div class="text-center me-3 mb-3">
                    <img src="{{ asset('assets/images/icon/10.png') }}" class="img-fluid rounded mb-2" alt="">
                    <h6>Instagram</h6>
                </div>
                <div class="text-center me-3 mb-3">
                    <img src="{{ asset('assets/images/icon/11.png') }}" class="img-fluid rounded mb-2" alt="">
                    <h6>Google Plus</h6>
                </div>
                <div class="text-center me-3 mb-3">
                    <img src="{{ asset('assets/images/icon/13.png') }}" class="img-fluid rounded mb-2" alt="">
                    <h6>In</h6>
                </div>
                <div class="text-center me-3 mb-3">
                    <img src="{{ asset('assets/images/icon/12.png') }}" class="img-fluid rounded mb-2" alt="">
                    <h6>YouTube</h6>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
