@extends('layouts.app')

@section('content')
  {{-- <!-- Preloader -->
  @include('layouts.components.preloader') --}}

  <!-- Navbar -->





  <!-- Content Wrapper. Contains page content -->



{{-- @if (Route::has('login'))
    @auth
        <input type="hidden" name="user_id" id="email" value="{{auth()->user()->id}}">
    @endauth
@endif --}}


 {{-- <div class="container">
    <div class="row justify-content-center">
        @if(count($products)>0)
            @foreach($products as $product)
                <div class="card bg-dark m-1 elevation-3" style="justify-content: space-between; height:400px;">
                <div class="card-body">
                    <form action="{{url('cart-create')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    @if (Route::has('login'))
                        @auth
                        <input type="hidden" name="user_id" id="email" value="{{auth()->user()->id}}">
                        @endauth
                    @endif
                    <img for="product_id" src="{{asset('dist/img/product/'.$product->product_photo)}}" width="200px" height="180px" alt="Image" >
                    <input type="hidden" name="product_id" id="product_id" class="form-control" value="{{$product->id}}">
                    <h4 class="text-center"><strong>{{$product->product_name}}</strong></h4>
                </div>

                    <div class="card-footer mt-2">
                    <h6>Price: {{$product->price}}</h6>
                    <input type="hidden" name="price" id="price" value="{{$product->price}}">
                    <div class="form-group text-dark">

                    <input class="form-control" type="number" name="quantity" id="quantity" class="form-control" value="1">

                    </div>
                    <div class="form-group text-dark">


                    <input class="form-control" type="total_amount" name="total_amount" id="total_amount" class="form-control" placeholder="Price * Quantity">
                    <input type="hidden" name="status" id="status" class="form-control" value="new">

                    </div>
                    <button class="btn btn-light" type="submit">Add Cart</button>
                    <button class="btn btn-success float-right">Order</button>

                </div>
                </form>
                </div>
            @endforeach
        @else
          <h4 class="text-warning" style="margin:100px auto;">There are no products.</h4>
        @endif
    </div>
 </div>
</div> --}}


<div class="py-3 py-md-5 bg-dark">
    <div class="container">
         <form action="{{url('cart-create')}}" method="POST" enctype="multipart/form-data" style="justify-content: space-between;">
                        @csrf
        <div class="row">
            <div class="col-md-12">
                <h4 class="mb-4">All Products</h4>
            </div>

                    @forelse ($products as $product)

                    <div class="col-6 col-md-3">
                        <div class="product-card card">
                            <div class="product-card-img">
                                @if ($product->status == 'active')
                                    <label class="stock bg-success">Available</label>
                                @else
                                    <label class="stock bg-danger">Not Available</label>
                                @endif

                                @if (Route::has('login'))
                                    @auth
                                <input type="hidden" name="user_id" id="email" value="{{auth()->user()->id}}">
                                    @endauth
                                @endif
                                <input type="hidden" name="product_id" id="product_id" class="form-control" value="{{$product->id}}">

                                <a href="{{url('/collections/'.$product->categories->category_name.'/'.$product->product_name)}}">
                                    <img src="{{asset('dist/img/product/'.$product->product_photo)}}" alt="Laptop">
                                </a>

                            </div>
                            <div class="product-card-body">
                                <h5 class="product-name">
                                <a href="{{url('/collections/'.$product->categories->category_name.'/'.$product->product_name)}}">
                                    {{$product->product_name}}
                                </a>
                                </h5>
                                <div>
                                    <span class="selling-price">₱{{$product->price}}</span>
                                    <span class="original-price">₱799</span>
                                </div>
                                <input type="hidden" name="price" class="form-control" value="{{$product->price}}">

                                <div class="col-md-12 my-auto">
                                    <div class="quantity">
                                        <div class="input-group">
                                            <span class="btn btn1 btn-warning"><i class="fa fa-minus"></i></span>
                                            <input type="text" name="quantity" value="1" class="input-quantity" />
                                            <span class="btn btn1 btn-warning"><i class="fa fa-plus"></i></span>
                                        </div>
                                    </div>
                                </div>

                                <input type="hidden" class="form-control" name="total_amount" id="total_amount" class="form-control">
                                <input type="hidden" name="status" id="status" class="form-control" value="new">
                                <div class="mt-2">

                                    <button type="submit" class="btn btn1 btn-success">Add Cart</button>
                                    {{-- <a href="" class="btn btn1"> <i class="fa fa-heart"></i> </a>
                                    <a href="" class="btn btn1"> View </a> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                        @empty
                        <div class="col-md-12">
                            <div class="p-2">
                                <h4>No products available for {{$categories->category_name}}</h4>
                            </div>
                        </div>
                    @endforelse



        </div>
        {{-- <div class="col-md-12 offset-md-5">
            <div class=" btn btn-primary">{{$products->links()}}</div>
        </div> --}}
    </div>
</form>
</div>

@endsection
