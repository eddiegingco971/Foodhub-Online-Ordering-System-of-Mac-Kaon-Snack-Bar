<div class="content-wrapper aligned-center">
 

  <section class="content bg-primary">
    <div class="container-fluid">
        <div class="row">
            @php
            $categories=DB::table('categories')->where('status','active')->limit(3)->get();
            @endphp
            @if($categories)
                @foreach($categories as $category)
                    
                        <!-- Single Banner  -->
                        {{-- <div class="col-lg-4 col-md-6 col-12"> --}}
                        
                            <div class="single-banner ml-3 p-2">
                              <strong>{{$category->category_name}}</strong>
                                {{-- @if($cat->photo)
                                    <img src="{{$cat->photo}}" alt="{{$cat->photo}}">
                                @else
                                    <img src="https://via.placeholder.com/600x370" alt="#">
                                @endif
                                <div class="content">
                                    <h3>{{$cat->title}}</h3>
                                        <a href="{{route('product-cat',$cat->slug)}}">Discover Now</a>
                                </div> --}}
                            </div>
                        
                   
                    <!-- /End Single Banner  -->
                @endforeach
            @endif
        </div>
    </div>
</section>





  <!-- Main content -->
      <!-- Small boxes (Stat box) -->
      <div class="content">
      <div class="row">
          @foreach ($sliders as $slider)

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
              <div class="text"  id="t1">{{$slider->name}}</div>
              <img src="{{asset('dist/img/slider/'.$slider->image)}}" style="width:100%">
            </div>

          <style>
            #t1{
              /* background-image: linear-gradient(to left, violet, indigo, blue, green, yellow, orange, red);
              -webkit-background-clip: text;
              -webkit-text-fill-color: transparent; */
              text-align: center;
              display: inline-block;
              color: white;
              text-shadow: 2px 3px red;
              font-weight: bold;
              font-size: 40px;
              position: absolute;
              top: 40%;
              left: 50%;
              transform: translate(-50%, -50%);
            }

            /* Hide the images by default */
            .mySlides {
              position: relative;
              display: none;
              width: 100%;
              height: 80%;
              background-repeat: no-repeat;
              background-size: cover;
            }

            /* Fading animation */
            .fade {
              animation-name: fade;
              animation-duration: 8.5s;
            }

            @keyframes fade {
              from {opacity: .3}
              to {opacity: 1}
            }
          </style>
        @endforeach
     </div>
    </div>
  <!-- /.content -->
  

    <!-- Content Header (Page header) -->
    <div class="content-header bg-primary p-2">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-6">
            <h2 class="m-0">Best Deals</h2>
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
        <div class="row justify-content-center">
            @foreach ($products as $product)
            <div class="card bg-dark m-1 elevation-3" style="justify-content: space-between; height:380px;">
              <div class="card-body">
                  <img src="{{asset('dist/img/product/'.$product->product_photo)}}" width="200px" height="200px" alt="Image" >
                  <h4 class="text-center"><strong>{{$product->product_name}}</strong></h4>
              </div>
              
               
                {{-- <h6>Stock: {{$product->quantity}}</h6> --}}
                <div class="card-footer mt-2">
                <h6>Price: {{$product->price}}</h6>
                <div class="form-group text-dark">
                  <input class="form-control" type="number" name="product_quantity" id="product_quantity" placeholder="1">
                </div>
                <button class="btn btn-light">Add Cart</button>
                  <button class="btn btn-success float-right">Order</button>
                
              </div>
            </div>   
          @endforeach
        </div>



        <h5 class="mt-4 mb-2">Tabs in Cards</h5>

        <div class="row">
          <div class="col-12">
            <!-- Custom Tabs -->
            <div class="card">
              <div class="card-header d-flex p-0">
                <h3 class="card-title p-3">Tabs</h3>
                <ul class="nav nav-pills ml-auto p-2">
                  <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">Tab 1</a></li>
                  <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">Tab 2</a></li>
                  <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab">Tab 3</a></li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                      Dropdown <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" tabindex="-1" href="#">Action</a>
                      <a class="dropdown-item" tabindex="-1" href="#">Another action</a>
                      <a class="dropdown-item" tabindex="-1" href="#">Something else here</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" tabindex="-1" href="#">Separated link</a>
                    </div>
                  </li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">
                    A wonderful serenity has taken possession of my entire soul,
                    like these sweet mornings of spring which I enjoy with my whole heart.
                    I am alone, and feel the charm of existence in this spot,
                    which was created for the bliss of souls like mine. I am so happy,
                    my dear friend, so absorbed in the exquisite sense of mere tranquil existence,
                    that I neglect my talents. I should be incapable of drawing a single stroke
                    at the present moment; and yet I feel that I never was a greater artist than now.
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_2">
                    The European languages are members of the same family. Their separate existence is a myth.
                    For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
                    in their grammar, their pronunciation and their most common words. Everyone realizes why a
                    new common language would be desirable: one could refuse to pay expensive translators. To
                    achieve this, it would be necessary to have uniform grammar, pronunciation and more common
                    words. If several languages coalesce, the grammar of the resulting language is more simple
                    and regular than that of the individual languages.
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_3">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    It has survived not only five centuries, but also the leap into electronic typesetting,
                    remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                    sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                    like Aldus PageMaker including versions of Lorem Ipsum.
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- ./card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
       
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  