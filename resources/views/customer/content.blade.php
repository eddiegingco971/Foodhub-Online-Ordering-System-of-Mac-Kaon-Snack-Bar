<div class="content-wrapper aligned-center">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Menu</h1>
          </div><!-- /.col -->
          {{-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col --> --}}
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            @foreach ($products as $product)
            <div class="card m-2 elevation-2">
              <div class="card-header">
                  <img src="{{asset('dist/img/product/'.$product->product_photo)}}" width="200px" height="200px" alt="Image" >
              </div>
              <div class="card-body">
                <h3 class="text-center"><strong>{{$product->product_name}}</strong></h3>
                <h6>Stock: {{$product->quantity}}</h6>
                <h6>Price: {{$product->price}}</h6>
                <button class="btn btn-danger">Add Cart</button>
              </div>
            </div>   
          @endforeach
        </div>
       
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>