<!doctype html>
<html class="no-js" lang="zxx">

<!-- index28:48-->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Thế giới điện tử</title>
        <meta name="description" content="">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('theme/images/favicon.png') }}">
        <!-- Material Design Iconic Font-V2.2.0 -->
        <link rel="stylesheet" href="{{ asset('theme/css/material-design-iconic-font.min.css') }}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('theme/css/font-awesome.min.css') }}">
        <!-- Font Awesome Stars-->
        <link rel="stylesheet" href="{{ asset('theme/css/fontawesome-stars.css' )}}">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="{{ asset('theme/css/meanmenu.css') }}">
        <!-- owl carousel CSS -->
        <link rel="stylesheet" href="{{ asset('theme/css/owl.carousel.min.css') }}">
        <!-- Slick Carousel CSS -->
        <link rel="stylesheet" href="{{ asset('theme/css/slick.css') }}">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="{{ asset('theme/css/animate.css') }}">
        <!-- Jquery-ui CSS -->
        <link rel="stylesheet" href="{{ asset('theme/css/jquery-ui.min.css') }}">
        <!-- Venobox CSS -->
        <link rel="stylesheet" href="{{ asset('theme/css/venobox.css') }}">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="{{ asset('theme/css/nice-select.css') }}">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="{{ asset('theme/css/magnific-popup.css') }}">
        <!-- Bootstrap V4.1.3 Fremwork CSS -->
        <link rel="stylesheet" href="{{ asset('theme/css/bootstrap.min.css') }}">
        <!-- Helper CSS -->
        <link rel="stylesheet" href="{{ asset('theme/css/helper.css') }}">
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="{{ asset('theme/css/style.css') }}">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{ asset('theme/css/responsive.css') }}">
        <!-- Modernizr js -->
        <script src="{{ asset('theme/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    </head>
    <body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
        <!-- Begin Body Wrapper -->
        @include('components.header')
        @if(Session::has('success'))
            <div class="alert alert-success alert-dismissible" style="position: fixed;left: 40%;z-index: 99">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Thành công!</strong> {{ Session::get('success') }}
            </div>
        @endif
        @if(Session::has('warning'))
            <div class="alert alert-warning alert-dismissible" style="position: fixed;left: 40%;z-index: 99">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Cảnh báo!</strong> {{ Session::get('warning') }}
            </div>
        @endif
        @if(Session::has('danger'))
            <div class="alert alert-danger alert-dismissible" style="position: fixed;left: 40%;z-index: 99">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Lỗi!</strong> {{ Session::get('danger') }}
            </div>
        @endif
        @yield('content')
        @include('components.footer')
        <!-- jQuery-V1.12.4 -->
        <script src="{{ asset('theme/js/vendor/jquery-1.12.4.min.js') }}"></script>
        <!-- Popper js -->
        <script src="{{ asset('theme/js/vendor/popper.min.js') }}"></script>
        <!-- Bootstrap V4.1.3 Fremwork js -->
        <script src="{{ asset('theme/js/bootstrap.min.js') }}"></script>
        <!-- Ajax Mail js -->
        <script src="{{ asset('theme/js/ajax-mail.js') }}"></script>
        <!-- Meanmenu js -->
        <script src="{{ asset('theme/js/jquery.meanmenu.min.js') }}"></script>
        <!-- Wow.min js -->
        <script src="{{ asset('theme/js/wow.min.js') }}"></script>
        <!-- Slick Carousel js -->
        <script src="{{ asset('theme/js/slick.min.js') }}"></script>
        <!-- Owl Carousel-2 js -->
        <script src="{{ asset('theme/js/owl.carousel.min.js') }}"></script>
        <!-- Magnific popup js -->
        <script src="{{ asset('theme/js/jquery.magnific-popup.min.js') }}"></script>
        <!-- Isotope js -->
        <script src="{{ asset('theme/js/isotope.pkgd.min.js') }}"></script>
        <!-- Imagesloaded js -->
        <script src="{{ asset('theme/js/imagesloaded.pkgd.min.js') }}"></script>
        <!-- Mixitup js -->
        <script src="{{ asset('theme/js/jquery.mixitup.min.js') }}"></script>
        <!-- Countdown -->
        <script src="{{ asset('theme/js/jquery.countdown.min.js') }}"></script>
        <!-- Counterup -->
        <script src="{{ asset('theme/js/jquery.counterup.min.js') }}"></script>
        <!-- Waypoints -->
        <script src="{{ asset('theme/js/waypoints.min.js') }}"></script>
        <!-- Barrating -->
        <script src="{{ asset('theme/js/jquery.barrating.min.js') }}"></script>
        <!-- Jquery-ui -->
        <script src="{{ asset('theme/js/jquery-ui.min.js') }}"></script>
        <!-- Venobox -->
        <script src="{{ asset('theme/js/venobox.min.js') }}"></script>
        <!-- Nice Select js -->
        <script src="{{ asset('theme/js/jquery.nice-select.min.js') }}"></script>
        <!-- ScrollUp js -->
        <script src="{{ asset('theme/js/scrollUp.min.js') }}"></script>
        <!-- Main/Activator js -->
        <script src="{{ asset('theme/js/main.js') }}"></script>
        @yield('script')
    </body>

<!-- index30:23-->
</html>