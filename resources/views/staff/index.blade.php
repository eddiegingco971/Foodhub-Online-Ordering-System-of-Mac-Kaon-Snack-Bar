<!DOCTYPE html>
<html lang="en">
<head>
  @include('staff.head')
  <link rel="stylesheet" href="{{asset('/plugins')}}/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('/plugins')}}/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('/plugins')}}/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('/dist')}}/css/adminlte.min.css">
  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('/dist')}}/img/Logo.png" alt="AdminLTELogo" height="200" width="200">
    @if (session('status'))
        <div class="alert alert-warning m-2" role="alert">
            {{ session('status') }}
        </div>
    @endif
  </div>

  <!-- Navbar -->
  @include('staff.navbar')
  <!-- /.navbar -->
  
  <!-- Main Sidebar Container -->
  @include('staff.sidebar')

  <!-- Content Wrapper. Contains page content -->
  @include('staff.content')
  <!-- /.content-wrapper -->

  @include('staff.footer')

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
<!-- AdminLTE for demo purposes -->
<script src="{{asset('/dist')}}/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('/dist')}}/js/pages/dashboard.js"></script>

<!-- jQuery -->
<script src="{{asset('/plugins')}}/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('/plugins')}}/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset('/plugins')}}/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('/plugins')}}/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('/plugins')}}/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('/plugins')}}/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{asset('/plugins')}}/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{asset('/plugins')}}/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{asset('/plugins')}}/jszip/jszip.min.js"></script>
<script src="{{asset('/plugins')}}/pdfmake/pdfmake.min.js"></script>
<script src="{{asset('/plugins')}}/pdfmake/vfs_fonts.js"></script>
<script src="{{asset('/plugins')}}/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{asset('/plugins')}}/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{asset('/plugins')}}/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('/dist')}}/js/adminlte.min.js"></script>
{{-- <!-- AdminLTE for demo purposes -->
<script src="{{asset('/dist')}}/js/demo.js"></script>
<!-- Page specific script --> --}}
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
