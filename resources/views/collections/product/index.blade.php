@extends('layouts.app')

@section('title')
    {{$categories->category_name}}
@endsection

@section('content')

{{-- @php
$products=DB::table('products')->where('status','active')->get();
@endphp --}}

<div class="py-3 py-md-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="mb-4">{{$categories->category_name}} Category</h4>
            </div>

            @forelse ($products as $product)
                <div class="col-md-3">
                    <div class="product-card">
                        <div class="product-card-img">
                            @if ($product->status == 'active')
                                <label class="stock bg-success">Available</label>
                            @else
                                <label class="stock bg-danger">Not Available</label>
                            @endif

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
                            <div class="mt-2">
                                <a href="" class="btn btn1">Add To Cart</a>
                                <a href="" class="btn btn1"> <i class="fa fa-heart"></i> </a>
                                <a href="" class="btn btn1"> View </a>
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
        <div class="col-md-12 offset-md-5">
            <div class=" btn btn-primary">{{$products->links()}}</div>
        </div>
    </div>
</div>



@endsection
