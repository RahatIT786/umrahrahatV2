<!DOCTYPE html>
<html lang="en" @yield('html-attribute')>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="{{ asset('asserts\user\img\rahatlogo.jpg') }}" type="image/png" />
  <!--plugins-->

  <link href="{{ asset('asserts/admin/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet"/>
  <link href="{{ asset('asserts/admin/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
  <link href="{{ asset('asserts/admin/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
  <link href="{{ asset('asserts/admin/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
  <!-- Bootstrap CSS -->
  <link href="{{ asset('asserts/admin/css/bootstrap.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('asserts/admin/css/bootstrap-extended.css') }}" rel="stylesheet" />
  <link href="{{ asset('asserts/admin/css/style.css') }}" rel="stylesheet" />
  <link href="{{ asset('asserts/admin/css/icons.css') }}" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  

  <!-- loader-->

	<link href="{{ asset('asserts/admin/css/pace.min.css') }}" rel="stylesheet" />

  <!--Theme Styles-->
  <link href="{{ asset('asserts/admin/css/dark-theme.css') }}" rel="stylesheet" />
  <link href="{{ asset('asserts/admin/css/light-theme.css') }}" rel="stylesheet" />
  <link href="{{ asset('asserts/admin/css/semi-dark.css') }}" rel="stylesheet" />
  <link href="{{ asset('asserts/admin/css/header-colors.css') }}" rel="stylesheet" />




   <!-- Summernote CSS for proper styling (optional for display) -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-lite.min.css" rel="stylesheet">
    <title>Umrah Rahat - Admin</title>
    @livewireStyles
</head>

<body>
    <div  class="wrapper">
        @include('admin.includes/sidebar')
        @livewire('admin.components.topbar')
       @yield('content')
       <!-- This is where the content from the Livewire component will be injected -->
       <main class="page-content">
        {{$slot}}
       </main>
       
    </div>
    @stack('scripts')
    @livewireScripts
</body>
<footer class="footer card mb-0 rounded-0 justify-content-center align-items-center">
  <!-- Bootstrap bundle JS -->

  <script src="{{asset('asserts/admin/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('asserts/admin/js/jquery.min.js')}}"></script>
  <script src="{{asset('asserts/admin/plugins/simplebar/js/simplebar.min.js')}}"></script>
  <script src="{{asset('asserts/admin/plugins/metismenu/js/metisMenu.min.js')}}"></script>
  <script src="{{asset('asserts/admin/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
  <script src="{{asset('asserts/admin/js/pace.min.js')}}"></script>

  <script src="{{asset('asserts/admin/plugins/chartjs/js/Chart.min.js')}}"></script>
  <script src="{{asset('asserts/admin/plugins/chartjs/js/Chart.extension.js')}}"></script>
  <script src="{{asset('asserts/admin/plugins/apexcharts-bundle/js/apexcharts.min.js')}}"></script>
   <!-- Vector map JavaScript -->
   <script src="{{asset('asserts/admin/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
   <script src="{{asset('asserts/admin/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
  <!--app-->
  <script src="{{asset('asserts/admin/js/app.js')}}"></script>
  <script src="{{asset('asserts/admin/js/index.js')}}"></script>
  <!-- Bootstrap 5 JavaScript -->
 

   <!-- Optional: Summernote JS for additional features -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-lite.min.js"></script>
  <script>
    new PerfectScrollbar(".review-list")
    new PerfectScrollbar(".chat-talk")
 </script>










<script>
  $(document).ready(function() {
      $('.summernote').summernote({
          height: 300, // set editor height
          toolbar: [
              ['style', ['style']],
              ['font', ['bold', 'italic', 'underline', 'clear']],
              ['fontname', ['fontname']],
              ['color', ['color']],
              ['para', ['ul', 'ol', 'paragraph']],
              // ['table', ['table']],
              // ['insert', ['link', 'picture', 'video']],
              // ['view', ['fullscreen', 'codeview', 'help']]
          ]
      });
  });



 

</script>








</footer>
</html>