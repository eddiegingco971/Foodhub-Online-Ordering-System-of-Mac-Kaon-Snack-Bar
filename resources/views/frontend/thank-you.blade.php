@extends('layouts.app')

@section('title', 'Thank You for Shopping')

@section('content')

    <div class="py-3 py-md-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    @if (session('message'))
                        <h5 class="alert alert-success">{{ session('message') }}</h5>
                    @endif

                    <div class="p-4 shadow bg-white">
                        <h2> <img src="{{asset('/assets')}}/Logo.png" alt="" width="35" height="35" class="rounded-circle"></h2>
                        <h4 class="mb-3">Thank You for Ordering with Mac Kaon FoodHub</h4>
                        <a href="{{ url('collections') }}" class="btn btn-primary">Order now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
