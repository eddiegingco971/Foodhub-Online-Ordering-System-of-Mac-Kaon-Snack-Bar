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
    <div class="container mt-4">
        <div class="row justify-content-center border elevation-3">
            <div class="col-md-4 p-5 mt-3 d-none d-md-block">
                <img src="{{asset('/dist')}}/img/Logo.png" width="350" height="600" class="img-circle elevation-2" alt="User Image">
            </div>

            <div class="col-md-6 offset-md-1 mt-4 p-3">
                <div class="card">
                    <div class="card-header text-center bg-primary"><h2><strong>{{ __('Register') }}</strong></h2></div>

                    <div class="card-body">
                        <div class="tab-pane" id="settings">
                        <form  class="form-horizontal" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf

                            {{-- <div class="row mb-3">

                                <div class="col-md-12">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Fullname">

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">

                                <div class="col-md-12">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">

                                <div class="col-md-12">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">

                                <div class="col-md-12">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                                </div>
                            </div> --}}

                                <div class="form-group row">
                                    <label for="firstname" class="col-sm-3 col-form-label">Firstname</label>
                                        <div class="col-sm-9">
                                            <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Firstname">
                                        </div>
                                        @error('firstname')
                                            <div class="text-danger">{{$message}}</div>
                                        @enderror
                                  </div>

                                  <div class="form-group row">
                                    <label for="lastname" class="col-sm-3 col-form-label">Lastname</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Lastname">
                                      </div>
                                      @error('lastname')
                                          <div class="text-danger">{{$message}}</div>
                                      @enderror
                                  </div>

                                  <div class="form-group row">
                                    <label for="gender" class="col-sm-3 col-form-label">Gender</label>
                                    <div class="offset-sm-1 col-sm-10">
                                      <div class="radio" id="gender" name="gender">
                                            <input type="radio" name="gender" value="Male"><a> Male</a>
                                            <input type="radio" name="gender" value="Female"><a> Female</a>
                                      </div>
                                    </div>
                                  </div>


                                  <div class="form-group row">
                                    <label for="age" class="col-sm-2 col-form-label">Age</label>
                                    <div class="col-sm-4">
                                        <input type="age" id="age" name="age" class="form-control" placeholder="18 Above only">
                                    </div>
                                    @error('age')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror

                                    <label for="birthdate" class="col-sm-2 col-form-label text-md-end text-dark">{{ __('Birthdate') }}</label>
                                    <div class="col-sm-4">
                                        <input type="date" id="birthdate" name="birthdate" class="form-control">
                                    </div>
                                    @error('birtdate')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                  </div>

                                  <div class="form-group row">
                                    <label for="address" class="col-sm-2 col-form-label">Address</label>
                                    <div class="col-sm-10">
                                        <input type="text" id="address" name="address" class="form-control" placeholder="Complete Address">
                                    </div>
                                    @error('address')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                  </div>

                                  <div class="form-group row">
                                    <label for="barangay" class="col-sm-2 col-form-label">Barangay</label>
                                    <div class="col-sm-4">
                                        <select  type="text" id="barangay" name="barangay" class="form-select form-control">
                                            <option hidden="true" value="#">--Select Barangay--</option>
                                            <option value="Cabatuan">Cabatuan</option>
                                            <option value="Cantubod">Cantubod</option>
                                            <option value="Carbon">Carbon</option>
                                            <option value="San Carlos">San Carlos</option>
                                            <option value="Concepcion">Concepcion</option>
                                            <option value="Dagohoy">Dagohoy</option>
                                            <option value="Sta. Fe">Sta. Fe</option>
                                            <option value="Hibale">Hibale</option>
                                            <option value="Magtangtang">Magtangtang</option>
                                            <option value="San Miguel">San Miguel</option>
                                            <option value="Nahud">Nahud</option>
                                            <option value="Sto. Niño">Sto. Niño</option>
                                            <option value="Poblacion">Poblacion</option>
                                            <option value="Remedios">Remedios</option>
                                            <option value="Tabok">Tabok</option>
                                            <option value="Taming">Taming</option>
                                            <option value="Villa Anunciado">Villa Anunciado</option>
                                           </select>
                                    </div>
                                    @error('barangay')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror

                                    <label for="phone_number" class="col-sm-3 col-form-label">Phone Number</label>
                                    <div class="col-sm-3">
                                        <input type="phone_number" id="phone_number" name="phone_number" class="form-control" placeholder="09xxxxxxxxx">
                                    </div>
                                    @error('phone_number')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                  </div>

                                  <div class="form-group row">
                                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="text" id="email" name="email" class="form-control" placeholder="Email">
                                    </div>
                                    @error('email')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                  </div>

                                  <div class="form-group row">
                                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" id="password" name="password" class="form-control" placeholder="Atleat 8 characters or above">
                                    </div>
                                    @error('password')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                  </div>

                                  <div class="form-group row">
                                    <label for="password_confirmation" class="col-sm-4 col-form-label">Confirm Password</label>
                                    <div class="col-sm-8">
                                        <input type="password" id="password-confirm" name="password_confirmation" required autocomplete="new-password" class="form-control">
                                    </div>
                                    @error('password_confirmation')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                  </div>

                                  <div class="row">
                                    <div class="col-sm-10 m-1">
                                      <div class="checkbox">
                                        <label>
                                          <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                                        </label>
                                      </div>
                                    </div>
                                  </div>

                            <div class="row mb-0">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary w-100 font-weight-bold mt-1">
                                        {{ __('Register') }}
                                    </button>
                                    <a href="{{url('/login')}}">
                                        <p class=" text-center mt-2">Already have an account?</p>
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
</div>
  <!-- /.content-wrapper -->
  @endsection
