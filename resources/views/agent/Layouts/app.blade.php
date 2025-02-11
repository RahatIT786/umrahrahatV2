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
        <link href="{{asset('asserts/agent/libs/jsvectormap/jsvectormap.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- swiper css -->
        <link rel="stylesheet" href="{{asset('asserts/agent/libs/swiper/swiper-bundle.min.css')}}">

        <!-- Bootstrap Css -->
        <link href="{{asset('asserts/agent/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('asserts/agent/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('asserts/agent/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

    </head>


    <body data-layout="horizontal" data-topbar="dark">

    <!-- <body data-layout="horizontal"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">
        @include('agent.includes.header');
        <div class="hori-overlay"></div>
        {{$slot}}
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    @include('agent.includes.rightbar')
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="{{asset('asserts/agent/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('asserts/agent/libs/metismenujs/metismenujs.min.js')}}"></script>
    <script src="{{asset('asserts/agent/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('asserts/agent/libs/feather-icons/feather.min.js')}}"></script>

    <!-- apexcharts -->
    <script src="{{asset('asserts/agent/libs/apexcharts/apexcharts.min.js')}}"></script>

    <!-- Vector map-->
    <script src="{{asset('asserts/agent/libs/jsvectormap/jsvectormap.min.js')}}"></script>
    <script src="{{asset('asserts/agent/libs/jsvectormap/maps/world-merc.js')}}"></script>

    <!-- swiper js -->
    <script src="{{asset('asserts/agent/libs/swiper/swiper-bundle.min.js')}}"></script>

    <script src="{{asset('asserts/agent/js/pages/dashboard.init.js')}}"></script>

    <script src="{{asset('asserts/agent/js/app.js')}}"></script>
    <!-- form wizard init -->
    
    <script src="{{asset('asserts/agent/js/pages/form-wizard.init.js')}}"></script>
    <script src="{{asset('asserts/agent/js/app.js')}}"></script>

    </body>

</html>
