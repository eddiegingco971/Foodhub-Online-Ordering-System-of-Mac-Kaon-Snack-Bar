
    <div class="content-wrapper">

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
                        <th>User ID</th>
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
                            <td>{{$cart->user_id}}</td>
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
      </div>





