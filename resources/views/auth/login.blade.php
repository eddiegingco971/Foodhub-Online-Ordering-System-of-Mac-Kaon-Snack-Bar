@extends('layouts.app')

@section('content')
  {{-- <!-- Preloader -->
  @include('layouts.components.preloader') --}}

  <!-- Navbar -->
  <nav class="navbar navbar-expand navbar-dark navbar-light">
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

            <a href="{{ route('login') }}" class="btn btn-sm text-white">Sign in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="mr-3 text-white btn btn-sm btn-outline-primary">Sign up</a>
            @endif
        @endauth
        @endif

    </ul>
</div>
    </div>
</nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <div class="content bg-primary">
    <div class="container mt-2">
        <div class="row">
            {{-- <div class="row justify-content-center"> --}}

            @php
            $categories=DB::table('categories')->where('status','active')->get();
            @endphp
            <div class="single-banner ml-2 p-2">
                <strong><a href="{{url('/')}}" class="text-light">Home</a></strong>
            </div>

            @if($categories)

                <!-- Example single danger button -->
                <div class="dropdown">
                <a class="nav-link dropdown-toggle text-light" id="navbarDropdown" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    <strong>Categories</strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    @foreach($categories as $category)
                    <li><a class="dropdown-item" href="#!">{{$category->category_name}}</a></li>
                    @endforeach
                </ul>
            </div>

            @endif
            <div class="single-banner ml-1 p-2">
                <strong><a href="#"  class="text-light">About Us</a></strong>
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

  <!-- Content Wrapper. Contains page content -->
<div class="content">
    <div class="container p-1">
        <div class="row justify-content-center m-5 border elevation-3">
            <div class="col-md-4 p-5 d-none d-md-block">
                <img src="{{asset('/dist')}}/img/Logo.png" width="350" height="350" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="col-md-6 offset-md-1 mt-4 p-3">
                <div class="card">
                    <div class="card-header text-center bg-primary"><h2><strong>Sign in</strong></h2></div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row pb-3">
                                {{-- <label for="email" class="col-md-4 col-form-label text-md-end text-dark">{{ __('Email Address') }}</label> --}}

                                <div class="col-md-12">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                {{-- <label for="password" class="col-md-4 col-form-label text-md-end text-dark">{{ __('Password') }}</label> --}}

                                <div class="col-md-12">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                                {{-- <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label text-dark" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div> --}}
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center"><input name="remember" type="checkbox" id="name" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" /> <span class="pl-2 font-weight-bold">{{ __('Remember Me') }}</span></div>
                                    <div>
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link w-100 font-weight-bold" href="{{ route('password.request') }}">Forgot Password?</a></div>
                                        @endif
                                    </div>


                            <div class="row mb-0">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary w-100 font-weight-bold mt-3">
                                        {{ __('Login') }}
                                    </button>
                                    <a href="{{url('/register')}}">
                                        <p class="text-center mt-2">Don't have an account?</p>
                                    </a>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <div class="content">
    <div class="container p-1">
        <div class="row m-3 justify-content-center">
          <div class="col-md-4 d-none d-md-block p-3">
            <img src="{{asset('/dist')}}/img/Logo.png" class="img-fluid" style="min-height:100%;" />
          </div>
          <div class="col-md-6 bg-white p-5">
            <h4 class="pb-3">Mac Kaon Sign In Page</h4>
            <div class="form-style">
              <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group pb-3">
                  <input type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group pb-3">
                  <input type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" id="exampleInputPassword1">
                </div>
                <div class="d-flex align-items-center justify-content-between">
                  <div class="d-flex align-items-center"><input name="remember" type="checkbox" id="name" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" /> <span class="pl-2 font-weight-bold">{{ __('Remember Me') }}</span></div>
                  <div><a href="{{ route('password.request') }}">Forget Password?</a></div>
                </div>
                <div class="pb-2">
                  <button type="submit" class="btn btn-dark w-100 font-weight-bold mt-2">Submit</button>
                </div>
              </form>
              <div class="sideline text-center">OR</div>
              <div>
                <button type="submit" class="btn btn-primary w-100 font-weight-bold mt-2"><i class="fa fa-facebook" aria-hidden="true"></i> Login With Facebook</button>
              </div>
              <div class="pt-4 text-center">
                Get Members Benefit. <a href="{{ url('/register') }}">Sign Up</a>
              </div>
            </div>

          </div>
        </div>
      </div>
</div> --}}

@endsection
