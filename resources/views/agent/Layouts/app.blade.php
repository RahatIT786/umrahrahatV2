<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Agent Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Agent Dashboard" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- plugin css -->
        <link href="{{asset('asserts/agent/assets/libs/jsvectormap/jsvectormap.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- swiper css -->
        <link rel="stylesheet" href="{{asset('assets/agent/assets/libs/swiper/swiper-bundle.min.css')}}">

        <!-- Bootstrap Css -->
        <link href="{{asset('asserts/agent/assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('asserts/agent/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('asserts/agent/assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

    </head>


    <body data-layout="horizontal" data-topbar="dark">

    <!-- <body data-layout="horizontal"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">
        @include('agent.includes.header');
        <div class="hori-overlay"></div>
    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    @include('agent.includes.rightbar')
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="{{asset('asserts/agent/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('asserts/agent/assets/libs/metismenujs/metismenujs.min.js')}}"></script>
    <script src="{{asset('asserts/agent/assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('asserts/agent/assets/libs/feather-icons/feather.min.js')}}"></script>

    <!-- apexcharts -->
    <script src="{{asset('asserts/agent/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

    <!-- Vector map-->
    <script src="{{asset('asserts/agent/assets/libs/jsvectormap/jsvectormap.min.js')}}"></script>
    <script src="{{asset('asserts/agent/assets/libs/jsvectormap/maps/world-merc.js')}}"></script>

    <!-- swiper js -->
    <script src="{{asset('asserts/agent/assets/libs/swiper/swiper-bundle.min.js')}}"></script>

    <script src="{{asset('asserts/agent/assets/js/pages/dashboard.init.js')}}"></script>

    <script src="{{asset('asserts/agent/assets/js/app.js')}}"></script>

    </body>

</html>
