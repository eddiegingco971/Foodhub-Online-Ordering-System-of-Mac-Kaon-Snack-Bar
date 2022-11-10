<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Eddie Gingco">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Mac Kaon FoodHub</title>

<link rel="stylesheet" href="{{asset('/plugins')}}/fontawesome-free/css/all.min.css">
<link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">
<link rel="stylesheet" href="{{asset('/base')}}/css/bootstrap.min.css" rel="stylesheet">


<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{asset('/plugins')}}/fontawesome-free/css/all.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet" href="{{asset('/plugins')}}/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<!-- iCheck -->
<link rel="stylesheet" href="{{asset('/plugins')}}/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- JQVMap -->
<link rel="stylesheet" href="{{asset('/plugins')}}/jqvmap/jqvmap.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="{{asset('/dist')}}/css/adminlte.min.css">

    <link href="{{asset('/base')}}/css/custom.css" rel="stylesheet">

  </head>
  <body>

    @include('layouts.components.preloader')

    <header>
        @include('layouts.base-navbar')
    </header>

    <main>
        @if (session('status'))
        <div class="alert alert-warning m-2 text-center" role="alert">
            {{ session('status') }}
        </div>
        @endif

        @if (session('error'))
            <div class="alert alert-warning m-2 text-center" role="alert">
                {{ session('error') }}
            </div>
        @endif

        @yield('content')

        {{-- @include('layouts.footer') --}}
    </main>
    @include('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    {{-- <script src="{{asset('/base')}}/js/bootstrap.bundle.min.js"></script> --}}
    <script src="{{asset('/base')}}/js/jquery.min.js"></script>

    <!-- jQuery -->
<script src="{{asset('/plugins')}}/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('/plugins')}}/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- ChartJS -->
<script src="{{asset('/plugins')}}/chart.js/Chart.min.js"></script>

<!-- jQuery Knob Chart -->
<script src="{{asset('/plugins')}}/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{asset('/plugins')}}/moment/moment.min.js"></script>
<script src="{{asset('/plugins')}}/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('/plugins')}}/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{asset('/plugins')}}/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{asset('/plugins')}}/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('/dist')}}/js/adminlte.js"></script>


  </body>
</html>
