<!DOCTYPE html>
    <html lang="en">
        <head>

            <!-- META -->
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="keywords" content="" />
            <meta name="author" content="" />
            <meta name="robots" content="" />
            <meta name="description" content="" />

            <!-- FAVICONS ICON -->
            <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
            <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

            <!-- PAGE TITLE HERE -->
            <title>@yield('title')</title>

            <!-- MOBILE SPECIFIC -->
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <!-- [if lt IE 9]>
            <script src="js/html5shiv.min.js"></script>
            <script src="js/respond.min.js"></script>
            <![endif] -->

            <!-- BOOTSTRAP STYLE SHEET -->
            <link rel="stylesheet" type="text/css" href="{{ asset('storage/css/bootstrap.min.css') }}">
            <!-- FONTAWESOME STYLE SHEET -->
            <link rel="stylesheet" type="text/css" href="{{ asset('storage/css/fontawesome/css/font-awesome.min.css') }}" />
            <!-- FLATICON STYLE SHEET -->
            <link rel="stylesheet" type="text/css" href="{{ asset('storage/css/flaticon.min.css') }}">
            <!-- ANIMATE STYLE SHEET -->
            <link rel="stylesheet" type="text/css" href="{{ asset('storage/css/animate.min.css') }}">
            <!-- OWL CAROUSEL STYLE SHEET -->
            <link rel="stylesheet" type="text/css" href="{{ asset('storage/css/owl.carousel.min.css') }}">
            <!-- BOOTSTRAP SELECT BOX STYLE SHEET -->
            <link rel="stylesheet" type="text/css" href="{{ asset('storage/css/bootstrap-select.min.css') }}">
            <!-- MAGNIFIC POPUP STYLE SHEET -->
            <link rel="stylesheet" type="text/css" href="{{ asset('storage/css/magnific-popup.min.css') }}">
            <!-- LOADER STYLE SHEET -->
            <link rel="stylesheet" type="text/css" href="{{ asset('storage/css/loader.min.css') }}">
            <!-- MAIN STYLE SHEET -->
            <link rel="stylesheet" type="text/css" href="{{ asset('storage/css/style.css') }}">
            <!-- THEME COLOR CHANGE STYLE SHEET -->
            <link rel="stylesheet" class="skin" type="text/css" href="{{ asset('storage/css/skin/skin-1.css') }}">
            <!-- CUSTOM  STYLE SHEET -->
            <link rel="stylesheet" type="text/css" href="{{ asset('storage/css/custom.css') }}">
            <!-- SIDE SWITCHER STYLE SHEET -->
            <link rel="stylesheet" type="text/css" href="{{ asset('storage/css/switcher.css') }}">


            <!-- REVOLUTION SLIDER CSS -->
            <link rel="stylesheet" type="text/css" href="{{ asset('storage/plugins/revolution/revolution/css/settings.css') }}">
            <!-- REVOLUTION NAVIGATION STYLE -->
            <link rel="stylesheet" type="text/css" href="{{ asset('storage/plugins/revolution/revolution/css/navigation.css') }}">

            <!-- GOOGLE FONTS -->
            <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

            <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

            <!-- include custom styles -->
            @if( config('app.locale') === 'vi' )
                <style type="text/css">
                    body{
                        font-family: 'Montserrat', sans-serif !important;
                    }
                </style>
            @endif
            @yield('styles')
            <!-- end custom styles -->
        </head>
        <body id="bg">
            <div class="page-wraper">
                <!-- HEADER START -->
                @include('themes::layouts.parts.front.header')
                <!-- END HEADER -->
                <!-- CONTENT START -->
                <div class="page-content">
                    @yield('content')

                </div>
                <!-- END CONTENT -->
                <!-- FOOTER START -->
                @include('themes::layouts.parts.front.footer')
                <!-- FOOTER END -->
                <!-- BUTTON TOP START -->
                <button class="scroltop"><span class=" iconmoon-house relative" id="btn-vibrate"></span>Top</button>
            </div>
            <!-- JAVASCRIPT  FILES ========================================= -->
            <script type="text/javascript"  src="{{ asset('storage/js/jquery-1.12.4.min.js') }}"></script><!-- JQUERY.MIN JS -->
            <script type="text/javascript"  src="{{ asset('storage/js/bootstrap.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->

            <script type="text/javascript"  src="{{ asset('storage/js/bootstrap-select.min.js') }}"></script><!-- FORM JS -->
            <script type="text/javascript"  src="{{ asset('storage/js/jquery.bootstrap-touchspin.min.js') }}"></script><!-- FORM JS -->

            <script type="text/javascript"  src="{{ asset('storage/js/magnific-popup.min.js') }}"></script><!-- MAGNIFIC-POPUP JS -->

            <script type="text/javascript"  src="{{ asset('storage/js/waypoints.min.js') }}"></script><!-- WAYPOINTS JS -->
            <script type="text/javascript"  src="{{ asset('storage/js/counterup.min.js') }}"></script><!-- COUNTERUP JS -->
            <script type="text/javascript"  src="{{ asset('storage/js/waypoints-sticky.min.js') }}"></script><!-- COUNTERUP JS -->

            <script type="text/javascript" src="{{ asset('storage/js/isotope.pkgd.min.js') }}"></script><!-- MASONRY  -->

            <script type="text/javascript"  src="{{ asset('storage/js/owl.carousel.min.js') }}"></script><!-- OWL  SLIDER  -->

            <script type="text/javascript"  src="{{ asset('storage/js/stellar.min.js') }}"></script><!-- PARALLAX BG IMAGE   -->
            <script type="text/javascript"  src="{{ asset('storage/js/scrolla.min.js') }}"></script><!-- ON SCROLL CONTENT ANIMTE   -->

            <script type="text/javascript"  src="{{ asset('storage/js/custom.js') }}"></script><!-- CUSTOM FUCTIONS  -->
            <script type="text/javascript"  src="{{ asset('storage/js/shortcode.js') }}"></script><!-- SHORTCODE FUCTIONS  -->
            <script type="text/javascript"  src="{{ asset('storage/js/switcher.js') }}"></script><!-- SWITCHER FUCTIONS  -->

            <!-- REVOLUTION JS FILES -->

            <script type="text/javascript" src="{{ asset('storage/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('storage/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

            <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
            <script type="text/javascript" src="{{ asset('storage/plugins/revolution/revolution/js/extensions/revolution-plugin.js') }}"></script>

            <!-- REVOLUTION SLIDER FUNCTION  ===== -->
            <script type="text/javascript"  src="{{ asset('storage/js/rev-script-1.js') }}"></script>

            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
            <!-- include custom script -->
            @yield('scripts')
            <!-- end include custom script -->
        </body>
    </html>
