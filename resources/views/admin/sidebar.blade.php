<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('/dist')}}/img/Logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Mac Kaon Foodhub</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex justify-content-center">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" width="50" height="50" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      {{-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> --}}

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          {{-- <li class="nav-header">Core Management</li> --}}
          <li class="nav-item">
            <a href="{{url('/home')}}" class="nav-link active">
              <i class="nav-icon fas fa-table"></i>
              <p>Dashboard</p>
            </a>
          </li>

          <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Order Management
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-danger right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/order')}}" class="nav-link">
                  <i class="far fa-calendar nav-icon"></i>
                  <p>Today's Order</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/cart-list')}}" class="nav-link">
                  <i class="far fa-clock nav-icon"></i>
                  <p>Cart</p>
                </a>
              </li>
             
            </ul>
          </li>

          <li class="nav-item">
            <a href="{{url('/category')}}" class="nav-link active">
              <i class="nav-icon fas fa-layer-group"></i>
              <p>Category Management</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{url('/product')}}" class="nav-link active">
              <i class="nav-icon fas fa-briefcase"></i>
              <p>Product Management</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{url('/user-list')}}" class="nav-link active">
              <i class="nav-icon fas fa-user"></i>
              <p>User Management</p>
            </a>
          </li>
          
          
        
          <li class="nav-header">Banner</li>

          <li class="nav-item">
            <a href="{{url('/slider')}}" class="nav-link">
              <i class="nav-icon far fa-images"></i>
              <p>
                Photo Slider
                <span class="badge badge-danger right"></span>
              </p>
            </a>
          </li>

          <li class="nav-header">Game Events</li>
          <li class="nav-item">
            <a href="{{url('/calendar')}}" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Calendar
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>