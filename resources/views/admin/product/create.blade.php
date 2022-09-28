<!DOCTYPE html>
<html lang="en">
<head>
  @include('admin.head')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  @include('admin.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="{{asset('/dist')}}/img/Logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Products</span>
    </a>

    <!-- Sidebar -->
    @include('admin.sidebar')
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper bg-dark">
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
    <!-- Main content -->
    <section class="content text-dark">
      <div class="container-fluid">
        <div class="row">
          <div class="col-6 offset-3 mt-3">

            <div class="card">
              <div class="card-header">
                <h1>Product Entry</h1>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="{{url('product-create')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="product_photo" class="col-form-label">Product Image</label>
                      <input type="file" name="product_photo" class="form-control" id="product_photo">
                    </div>
                    <div class="form-group">
                        <label for="product_name" class="col-form-label">Product Name</label>
                        <input type="product_name" name="product_name" class="form-control" id="product_name" placeholder="Product Name">
                      </div>
                      <div class="form-group">
                        <label for="quantity" class="col-form-label">Quantity</label>
                        <input type="quantity" name="quantity" class="form-control" id="quantity" placeholder="1-100">
                      </div>
                    <div class="form-group">
                      <label for="price" class="col-form-label">Price</label>
                      <input type="price" name="price" class="form-control" id="price" placeholder="0.00">
                    </div>


                      <div class="form-group text-justify-end">
                        <a type="button" class="btn btn-secondary" href="{{url('/product')}}">Back</a>
                        <button type="submit" class="btn btn-info" style="position: relative; left:78%;">Save</button>
                    </div>

                  </form>
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
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

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
<script src="{{asset('/plugins')}}/datatables-buttons/js/buttons.colVis.min.js"></script>-
</body>
</html>
