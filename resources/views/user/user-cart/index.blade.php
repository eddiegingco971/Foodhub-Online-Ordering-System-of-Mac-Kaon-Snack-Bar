{{-- <!DOCTYPE html>
<html lang="en">
<head>
  @include('layouts.components.head')
  <link rel="stylesheet" href="{{asset('/plugins')}}/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('/plugins')}}/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('/plugins')}}/datatables-buttons/css/buttons.bootstrap4.min.css">

</head>
<body >

    <header>
        @include('layouts.base-navbar')
    </header>

  <main>
  <!-- Content Wrapper. Contains page content -->
  @include('user.content')
  <!-- /.content-wrapper -->
</main>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

<!-- jQuery -->
<script src="{{asset('/plugins')}}/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('/plugins')}}/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset('/plugins')}}/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('/plugins')}}/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('/plugins')}}/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('/plugins')}}/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{asset('/plugins')}}/datatables-buttons/js/buttons.html5.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('/dist')}}/js/adminlte.min.js"></script>
<!-- Page specific script -->
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
</html> --}}

@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
          <div class="col-sm-6 mt-3">
              <h1>Cart Management</h1>
          </div>
          {{-- <div class="col-sm-6 mt-3">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a class="btn btn-primary" href="{{url('product-create')}}">Add Product</a></li>
              </ol>
          </div> --}}

      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">

          <div class="card elevation-3">
            <div class="card-header">
              <h3 class="card-title">List of Cart</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Product ID</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Total Amount</th>
                  <th>Status</th>


                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($carts as $cart)
                    <tr>
                      <td>{{$cart->product_id}}</td>
                      <td>{{$cart->price}}</td>
                      <td>{{$cart->quantity}}</td>
                      <td>{{$cart->total_amount}}</td>
                      <td>{{$cart->status}}</td>

                      <td>
                        {{-- <a href="{{url('edit-customer/' .$customer->id)}}" class="btn btn-info btn-sm">Edit</a> --}}
                        <a href="{{url('delete-cart/'.$cart->id)}}" class="btn btn-danger btn-sm">Delete</a>
                      </td>
                    </tr>
                @endforeach
                </tbody>
                {{-- <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </tfoot> --}}
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->

@endsection


    {{-- <div class="content-wrapper">

        @include('layouts.components.preloader')

        @if (session('status'))
        <div class="alert alert-success text-center" role="alert">
            {{ session('status') }}
        </div>
        @endif
        @if (session('error'))
            <div class="alert alert-warning text-center" role="alert">
                {{ session('error') }}
            </div>
        @endif

      </div> --}}






