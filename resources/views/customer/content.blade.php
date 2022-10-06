<div class="content-wrapper aligned-center">
 
  <!-- Main content -->
      <!-- Small boxes (Stat box) -->
      <div class="content">
      <div class="row">
          @foreach ($sliders as $slider)

          <!-- Slideshow container -->

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade" id="banner">
              <img src="{{asset('dist/img/slider/'.$slider->image)}}" style="width:100%">
              <div class="text-dark text-center">{{$slider->name}}</div>
            </div>
            
          <style>

            /* Hide the images by default */
            .mySlides {
              display: none;
              width: 100%;
              height: 100%;
              background-repeat: no-repeat;
              background-size: cover;
            }

            /* Fading animation */
            .fade {
              animation-name: fade;
              animation-duration: 5.5s;
            }

            @keyframes fade {
              from {opacity: .4}
              to {opacity: 1}
            }
          </style>
          
        @endforeach
      </div>
    </div>
  <!-- /.content -->
  


    <!-- Content Header (Page header) -->
    <div class="content-header bg-dark">
      <div class="container-fluid">
        <div class="row mt-2">
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
    <section class="content mt-2">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            @foreach ($products as $product)
            <div class="card ml-4 elevation-2">
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

  