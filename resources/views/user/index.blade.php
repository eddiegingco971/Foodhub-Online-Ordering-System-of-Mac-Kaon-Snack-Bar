<!DOCTYPE html>
<html lang="en">
<head>
  @include('layouts.components.head')
  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  {{-- @include('customer.preloader') --}}

  <!-- Navbar -->
  @include('layouts.components.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('layouts.components.sidebar')

  <!-- Content Wrapper. Contains page content -->
  @include('user.content')
  <!-- /.content-wrapper -->

  @include('layouts.components.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('/plugins')}}/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('/plugins')}}/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('/plugins')}}/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="{{asset('/plugins')}}/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{asset('/plugins')}}/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{asset('/plugins')}}/jqvmap/jquery.vmap.min.js"></script>
<script src="{{asset('/plugins')}}/jqvmap/maps/jquery.vmap.usa.js"></script>
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
{{-- <!-- AdminLTE for demo purposes -->
<script src="{{asset('/dist')}}/js/demo.js"></script> --}}
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('/dist')}}/js/pages/dashboard.js"></script>

<script src="{{asset('/dist')}}/js/script.js"></script>
</body>
</html>
