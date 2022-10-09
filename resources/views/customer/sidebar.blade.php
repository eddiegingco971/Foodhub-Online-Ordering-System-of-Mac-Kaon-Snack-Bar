<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('/dist')}}/img/Logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Mac Kaon Foodhub</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" width="50" height="50" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div> --}}

     

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-header">Account Setting</li>
          <li class="nav-item">
            <a href="{{url('/customer')}}" class="nav-link active">
              <i class="nav-icon fas fa-briefcase"></i>
              <p>Products</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/customer-cart')}}" class="nav-link active">
              <i class="nav-icon fas fa-shopping-cart"></i>
              <p>Cart</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{url('/customer-order')}}" class="nav-link active">
              <i class="nav-icon fas fa-truck"></i>
              <p>Order</p>
            </a>
          </li>

          <li class="nav-header">Game Events</li>
          <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
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