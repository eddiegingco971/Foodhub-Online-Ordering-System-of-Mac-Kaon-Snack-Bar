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


 <div class="container">
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
                    {{-- @foreach ($orders as $order)
                        <input class="form-control" type="total_amount" name="total_amount" id="total_amount" class="form-control" value="{{($product->price)*($order->quantity)}}">
                    @endforeach --}}

                    <input class="form-control" type="total_amount" name="total_amount" id="total_amount" class="form-control" placeholder="Price * Quantity">
                    <input type="hidden" name="status" id="status" class="form-control" value="new">
                    {{-- @foreach ($carts as $cart)
                        <input type="hidden" name="status" id="status" class="form-control" value="{{$cart->status}}">
                    @endforeach --}}

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
</div>

{{-- @foreach ($carts as $cart)
<input type="hidden" name="status" id="status" class="form-control" value="{{$cart->status}}">
@endforeach --}}


@endsection
