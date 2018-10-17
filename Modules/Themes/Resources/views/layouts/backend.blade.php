<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
        <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
        <meta name="author" content="Lux Beauty Academy">
        <title>Lux Beauty Services - @yield('title')</title>
        <link rel="apple-touch-icon" href="{{ asset('storage/app-assets/images/ico/apple-icon-120.png') }}">
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('storage/app-assets/images/ico/favicon.ico') }}">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700" rel="stylesheet">
        <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
        <!-- BEGIN VENDOR CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('storage/app-assets/css/vendors.min.css') }}">
        <!-- END VENDOR CSS-->
        <!-- BEGIN MODERN CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('storage/app-assets/css/app.min.css') }}">
        <!-- END MODERN CSS-->
        <!-- BEGIN Page Level CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('storage/app-assets/css/core/menu/menu-types/vertical-menu-modern.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('storage/app-assets/css/core/colors/palette-gradient.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('storage/app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('storage/app-assets/vendors/css/charts/morris.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('storage/app-assets/fonts/simple-line-icons/style.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('storage/app-assets/css/core/colors/palette-gradient.min.css') }}">
        <!-- END Page Level CSS-->
        <!-- BEGIN Custom CSS-->
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('storage/assets/css/style.css') }}">

        <link rel="stylesheet" type="text/css" href="{{ asset('storage/app-assets/css/core/colors/palette-tooltip.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('storage/app-assets/vendors/css/pickers/daterange/daterangepicker.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('storage/app-assets/vendors/css/pickers/pickadate/pickadate.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('storage/app-assets/css/plugins/pickers/daterange/daterange.min.css')}}">

        <link rel="stylesheet" type="text/css" href="{{ asset('storage/app-assets/css/bootstrapdatepicker/bootstrap-datepicker.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('storage/app-assets/css/plugins/loaders/loaders.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('storage/app-assets/css/core/colors/palette-loader.min.css') }}">
        <!-- END Custom CSS-->
        @yield('styles')
    </head>
    <body class="vertical-layout vertical-menu-modern content-left-sidebar chat-application fixed-navbar  menu-expanded pace-done">
        @include('themes::layouts.parts.back.header')
        <div class="app-content content">
            <div class="content-wrapper">
                @yield('content')
            </div>
        </div>
        <!--**************************************************************-->
        @include('themes::layouts.parts.back.footer')

        <!-- BEGIN VENDOR JS-->
        <script src="{{ asset('storage/app-assets/vendors/js/vendors.min.js') }}" type="text/javascript"></script>
        <!-- BEGIN VENDOR JS-->
        <!-- BEGIN PAGE VENDOR JS-->
        <script src="{{ asset('storage/app-assets/vendors/js/charts/chart.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('storage/app-assets/vendors/js/charts/raphael-min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('storage/app-assets/vendors/js/charts/morris.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('storage/app-assets/vendors/js/charts/jvector/jquery-jvectormap-2.0.3.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('storage/app-assets/vendors/js/charts/jvector/jquery-jvectormap-world-mill.js') }}" type="text/javascript"></script>
        <script src="{{ asset('storage/app-assets/data/jvector/visitor-data.js') }}" type="text/javascript"></script>
        <!-- END PAGE VENDOR JS-->
        <!-- BEGIN MODERN JS-->
        <script src="{{ asset('storage/app-assets/js/core/app-menu.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('storage/app-assets/js/core/app.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('storage/app-assets/js/scripts/customizer.min.js') }}" type="text/javascript"></script>
        <!-- END MODERN JS-->
        <!-- BEGIN PAGE LEVEL JS-->
        <script src="{{ asset('storage/app-assets/js/scripts/pages/dashboard-sales.min.js') }}" type="text/javascript"></script>
        <!-- END PAGE LEVEL JS-->
        <script type="text/javascript" src="{{ asset('storage/app-assets/js/scripts/tooltip/tooltip.min.js') }}"></script>
        <script src="{{ asset('storage/app-assets/vendors/js/pickers/pickadate/picker.js')}}" type="text/javascript"></script>
        <script src="{{ asset('storage/app-assets/vendors/js/pickers/pickadate/picker.date.js')}}" type="text/javascript"></script>
        <script src="{{ asset('storage/app-assets/vendors/js/pickers/pickadate/picker.time.js')}}" type="text/javascript"></script>
        <script src="{{ asset('storage/app-assets/vendors/js/pickers/pickadate/legacy.js')}}" type="text/javascript"></script>
        <script src="{{ asset('storage/app-assets/vendors/js/pickers/dateTime/moment-with-locales.min.js')}}"
        type="text/javascript"></script>
        <script type="text/javascript" src="{{ asset('storage/app-assets/js/bootstrapdatepicker/bootstrap-datepicker.min.js')}}"></script>
        @yield('plugin-scripts')
        @yield('scripts')
    </body>
</html>