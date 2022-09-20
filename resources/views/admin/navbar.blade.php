
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
  <!-- Navbar Brand-->
  <a class="navbar-brand ps-3" href="{{url('home')}}">Mac Kaon FoodHub</a>
  <!-- Sidebar Toggle-->
  <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
  <!-- Navbar Search-->
  <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
      <div class="input-group">
          <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
          <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
      </div>
  </form>

  <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
      <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="https://github.com/mdo.png" alt="" width="22" height="22" class="rounded-circle me-2">
          <strong>{{ Auth::user()->name }}</strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
          {{-- <li><a class="dropdown-item" href="#">New project...</a></li>--}}
          <li><a class="dropdown-item" href="#">Settings</a></li> 
          <li><a class="dropdown-item" href="#">Profile</a></li>
          <li><hr class="dropdown-divider"></li>
          <li>
              <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>

          </li>
        </ul>
      </div>
  </ul>
</nav>

