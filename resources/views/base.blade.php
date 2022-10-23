@extends('layouts.app')

@section('content')
  {{-- <!-- Preloader -->
  @include('layouts.components.preloader') --}}

  <!-- Navbar -->

  <nav class="navbar navbar-expand navbar-dark navbar-light py-0">
    <!-- Left navbar links -->
    <div class="container-fluid">
    <ul class="navbar-nav">
        {{-- <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li> --}}
      {{-- <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li> --}}
      {{-- <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> --}}
       <!-- Navbar Search -->

      <a href="{{url('/')}}" class="brand-link">
        <img src="{{asset('/dist')}}/img/Logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8" >
        <span class="brand-text font-weight-light">Mac Kaon Foodhub</span>
      </a>

    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      @if (Route::has('login'))
      @auth
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="" width="30" height="30" class="rounded-circle">
                {{-- <strong>{{Auth::user()->name}}</strong> --}}
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#!">Account Settings</a></li>
                <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li><a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                </form>
                </li>
            </ul>
        </li>
        @else

            <a href="{{ route('login') }}" class="btn text-white">Sign in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="mr-3 text-white btn btn-outline-primary">Sign up</a>
            @endif
        @endauth
        @endif

    </ul>
</div>
    </div>
</nav>

    <!-- Main content -->
    <div class="content bg-primary py-2">
        <div class="container-fluid">
            <div class="row justify-content-center">


                <nav class="navbar navbar-expand justify-content-center">
                <ul class="navbar-nav">
                <div class="col-12 offset-md-0">
                    <form action="simple-results.html">
                        <div class="input-group">
                            <input type="search" class="form-control form-control-lg" placeholder="Search">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-lg btn-default">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                </ul>
                <ul class="navbar-nav ml-auto">
                <div class="col-4 offset-md-2">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-lg btn-default">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
                </ul>
                </nav>

            </div>
        </div>
    </div>


  <!-- Content Wrapper. Contains page content -->
<div class="content">
    <div class="container mt-2">
        <div class="row">
            {{-- <div class="row justify-content-center"> --}}

            @php
            $categories=DB::table('categories')->where('status','active')->get();
            @endphp
            <div class="single-banner ml-2 p-2">
                <strong><a href="#" class="text-dark">Home</a></strong>
            </div>

            @if($categories)
            @foreach($categories as $category)
                <!-- Example single danger button -->
                <div class="dropdown">
                <a class="nav-link dropdown-toggle text-dark" id="navbarDropdown" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    <strong>Categories</strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">{{$category->category_name}}</a></li>
                </ul>
            </div>
                @endforeach
            @endif
            <div class="single-banner ml-1 p-2">
                <strong><a href="#"  class="text-dark">About Us</a></strong>
            </div>



            {{-- @if($categories)
                @foreach($categories as $category)
                <div class="single-banner ml-3 p-2">
                    <strong>{{$category->category_name}}</strong>
                </div>
                @endforeach
            @endif --}}

        </div>
    </div>
</div>
{{-- <div class="content">
    <div class="row">
        <section id="Gslider" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                @foreach($sliders as $slider)
                    <li data-target="#Gslider" data-slide-to="{{$key}}" class="{{(($key==0)? 'active' : '')}}"></li>
                @endforeach

            </ol>
            <div class="carousel-inner" role="listbox">
                    @foreach($sliders as $slider)
                    <div class="carousel-item">
                        <div class="carousel-item {{(($key==0)? 'active' : '')}}">
                        <img class="first-slide" src="{{asset('dist/img/slider/'.$slider->image)}}" alt="First slide">
                        <div class="carousel-caption d-none d-md-block text-left">
                            <h1 class="wow fadeInDown">{{$slider->name}}</h1>
                            <p>{!! html_entity_decode($banner->description) !!}</p>
                            <a class="btn btn-lg ws-btn wow fadeInUpBig" href="{{route('product-grids')}}" role="button">Shop Now<i class="far fa-arrow-alt-circle-right"></i></i></a>
                        </div>
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#Gslider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#Gslider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
        </section>
    </div>
</div> --}}

@push('styles')
    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5f2e5abf393162001291e431&product=inline-share-buttons' async='async'></script>
    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5f2e5abf393162001291e431&product=inline-share-buttons' async='async'></script>
    <style>
        /* Banner Sliding */
        #Gslider .carousel-inner {
        background: #000000;
        color:black;
        }

        #Gslider .carousel-inner{
        height: 550px;
        }
        #Gslider .carousel-inner img{
            width: 100% !important;
            opacity: .8;
        }

        #Gslider .carousel-inner .carousel-caption {
        bottom: 60%;
        }

        #Gslider .carousel-inner .carousel-caption h1 {
        font-size: 50px;
        font-weight: bold;
        line-height: 100%;
        color: #F7941D;
        }

        #Gslider .carousel-inner .carousel-caption p {
        font-size: 18px;
        color: black;
        margin: 28px 0 28px 0;
        }

        #Gslider .carousel-indicators {
        bottom: 70px;
        }
    </style>
@endpush

@endsection
