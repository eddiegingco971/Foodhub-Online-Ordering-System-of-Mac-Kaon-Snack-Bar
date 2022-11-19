@extends('layouts.app')

@section('title','Login')

@section('content')

{{-- <div class="py-md-5 py-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow">
                    <div class="card-header"><h5>{{ __('Login') }}</h5></div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="email" class="col-form-label text-md-end">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password" class="col-form-label text-md-end">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary w-100">
                                    {{ __('Login') }}
                                </button>
                            </div>

                            <div class="mb-3">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="content bg-dark">
    <div class="container p-1">
        <div class="row justify-content-center m-5 border elevation-3 bg-light">
            <div class="col-md-4 p-5 d-none d-md-block">
                <img src="{{asset('/assets')}}/Logo.png" width="350" height="350" class="img-circle elevation-3" alt="Login Logo" style="border: 2px solid black">
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


                                <div class="col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} required>

                                        <label class="form-check-label text-dark font-weight-bold" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                                {{-- <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center"><input name="remember" type="checkbox" id="name" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" /> <span class="pl-2 font-weight-bold text-dark">{{ __('Remember Me') }}</span></div>
                                    <div>
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link w-100 font-weight-bold" href="{{ route('password.request') }}">Forgot Password?</a></div>
                                        @endif
                                </div> --}}


                            <div class="row mb-0">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary w-100 font-weight-bold mt-3">
                                        {{ __('Login') }}
                                    </button>
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link w-100 font-weight-bold mt-3" href="{{ route('password.request') }}">Forgot Password?</a></div>
                                    @endif
                                    <a href="{{url('/register')}}">
                                        <p class="text-center">Don't have an account?</p>
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

@endsection
