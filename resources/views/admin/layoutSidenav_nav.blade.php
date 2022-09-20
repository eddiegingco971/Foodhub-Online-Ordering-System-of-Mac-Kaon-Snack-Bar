
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link" href="{{url('/home')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
  
                    {{-- <a class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Order Management
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="layout-static.html">Today's Order</a>
                            <a class="nav-link" href="layout-sidenav-light.html">Pending Order</a>
                            <a class="nav-link" href="layout-sidenav-light.html">Delivered Order</a>
                            <a class="nav-link" href="layout-sidenav-light.html">Order's History</a>
                        </nav>
                    </div> --}}

                    <a class="nav-link" href="{{url('/order')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Order Management
                    </a>

                    <a class="nav-link" href="{{url('/category')}}">
                      <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                      Category Management
                  </a>
  
                  <a class="nav-link" href="{{url('/product')}}">
                      <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                      Product Management
                  </a>
  
                    <div class="sb-sidenav-menu-heading">Product Management</div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Orders
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="layout-static.html">Static Navigation</a>
                            <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                        </nav>
                    </div>
  
                   
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                {{ Auth::user()->name }}
            </div>
        </nav>
    </div>
