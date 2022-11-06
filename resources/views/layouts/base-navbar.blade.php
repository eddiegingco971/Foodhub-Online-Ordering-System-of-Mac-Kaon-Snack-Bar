<div class="main-navbar shadow-sm sticky-top elevation-3">
    <div class="top-navbar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 my-auto d-none d-sm-none d-md-block d-lg-block">
                    {{-- <a class="brand-name">
                        <img src="{{asset('/dist')}}/img/Logo.png" alt="" width="30" height="30" class="rounded-circle">
                        Mac Kaon FoodHub
                    </a> --}}
                    <a class="brand-name">
                        <a class="nav-link" href="#">
                            <img src="{{asset('/dist')}}/img/Logo.png" alt="" width="30" height="30" class="rounded-circle">
                            Mac Kaon FoodHub
                        </a>
                    </a>
                </div>
                <div class="col-md-6 my-auto">
                    <form role="search">
                        <div class="input-group">
                            <input type="search" placeholder="Search your product" class="form-control" />
                            <button class="btn bg-white" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-md-3 my-auto">
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fa fa-shopping-cart"></i> Cart (0)
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            @if (Route::has('login'))
                            @auth
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-user"></i> {{Auth::user()->firstname}} {{Auth::user()->lastname}}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @if (Auth::user()->user_type == 'admin')
                                    <li><a class="dropdown-item" href="{{url('/profile')}}"><i class="fa fa-user"></i> Profile</a></li>
                                    <li><a class="dropdown-item" href="{{url('/home')}}"><i class="fa fa-list"></i>Admin Dashboard</a></li>
                                    <li><a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            <i class="fa fa-sign-out"></i> {{ __('Logout') }}</a>
                                        </li>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                @elseif(Auth::user()->user_type == 'staff')
                                    <li><a class="dropdown-item" href="{{url('/profile')}}"><i class="fa fa-user"></i> Profile</a></li>
                                    <li><a class="dropdown-item" href="{{url('/staff')}}"><i class="fa fa-list"></i>Staff Dashboard</a></li>
                                    <li><a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            <i class="fa fa-sign-out"></i> {{ __('Logout') }}</a>
                                        </li>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                @else
                                    <li><a class="dropdown-item" href="{{url('/profile')}}"><i class="fa fa-user"></i> Profile</a></li>
                                        <li><a class="dropdown-item" href="{{url('/user-order')}}"><i class="fa fa-list"></i> My Orders</a></li>
                                        <li><a class="dropdown-item" href="{{url('/user-cart')}}"><i class="fa fa-shopping-cart"></i> My Cart</a></li>
                                        <li><a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                <i class="fa fa-sign-out"></i> {{ __('Logout') }}</a>
                                            </li>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                @endif
                            </ul>

                            @else

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">
                                   Login
                                </a>
                            </li>

                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">
                                    Register
                                </a>
                            </li>
                            @endif

                            @endauth
                            @endif


                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="bot-navbar">
            <div class="col-md-5 my-auto">
                <ul class="nav justify-content-start">

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/')}}">
                            <i class="fas fa-home"></i> Home
                        </a>
                    </li>

                    @php
                    $categories=DB::table('categories')->where('status','active')->get();
                    @endphp

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-user"></i> All Categories
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach($categories as $category)
                                <li><a class="dropdown-item" href="#"></i> {{$category->category_name}}</a></li>

                            @endforeach
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-info-circle"></i> About Us
                        </a>
                    </li>
                </ul>
            </div>


    </div>
    {{-- <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">

            <div class="col-md-5 my-auto">
                <ul class="nav justify-content-start">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                           Cart (0)
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Wishlist (0)
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-user"></i> All Categories
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fa fa-list"></i> My Orders</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fa fa-heart"></i> My Wishlist</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fa fa-shopping-cart"></i> My Cart</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fa fa-sign-out"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav> --}}
</div>
