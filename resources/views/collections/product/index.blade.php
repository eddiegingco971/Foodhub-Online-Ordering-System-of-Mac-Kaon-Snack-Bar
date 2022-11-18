@extends('layouts.app')

@section('content')

<div class="py-3 py-md-5 bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="mb-4">Our products</h4>
            </div>

            @foreach ($products as $product)
            <div class="col-6 col-md-3">
                <div class="product-card">
                    <a href="{{url('select', ['product'=>$product->id])}}">
                        <div class="product-card-img">
                            <img src="{{asset('dist/img/product/'.$product->image)}}" class="w-100" alt="Product Image">
                        </div>
                        <div class="product-card-body">
                            <h5>{{$product->product_name}}</h5>
                        </div>
                        <div class="col-md-6">
                            <p>{{$product->description}}</p>
                        </div>
                    </a>
                    {{-- <a href="{{url('/collections/'.$product->categories->category_name.'/'.$product->product_name)}}">
                        <div class="product-card-img">
                            <img src="{{asset('dist/img/product/'.$product->image)}}" class="w-100" alt="Product Image">
                        </div>
                        <div class="product-card-body">
                            <h5>{{$product->product_name}}</h5>
                        </div>
                        <div class="col-md-6">
                            <p>{{$product->description}}</p>
                        </div>
                    </a> --}}
                </div>
            </div>
            @endforeach
        </div>
        {{-- <div class="col-md-12 offset-md-5">
            <div class=" btn">{{$products->links()}}</div>
        </div> --}}
    </div>
</div>


@endsection
