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
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->


  <!-- Content Wrapper. Contains page content -->
<div class="content">
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center bg-primary"><h2><strong>{{ __('Register') }}</strong></h2></div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  <!-- /.content-wrapper -->
  @endsection
