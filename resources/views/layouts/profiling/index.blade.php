<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.components.head')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Navbar -->
  @include('layouts.components.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('layouts.components.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Account Settings</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            @if (Auth::user()->user_type == 'admin')

            <div class="col-md-4">
                <div class="card card-primary card-outline">
                  <div class="card-body box-profile">
                    <div class="text-center">
                        @foreach ($profiles as $profile)
                      <img class="profile-user-img img-fluid img-circle"
                           src="{{asset('dist/img/user-profile/'.$profile->user_pic)}}"
                           alt="User profile picture">
                        @endforeach
                    </div>
                    @foreach ($profiles as $profile)
                    <h3 class="profile-username text-center">{{$profile->firstname}} {{$profile->middlename}} {{$profile->lastname}}</h3>

                    <p class="text-muted text-center">{{$profile->email}}</p>
                    @endforeach
                  </div>
                  <!-- /.card-body -->
                </div>
              </div>

              <div class="col-md-8">
                <div class="card">
                  <div class="card-header p-2">
                    <h3 class="text-center">Admin Settings</h3>
                  </div><!-- /.card-header -->
                  <div class="card-body">
                    <div class="tab-content">
                      <div class="active tab-pane" id="activity">

                      <div class="tab-pane" id="settings">
                        <form  class="form-horizontal" action="{{url('profile-create')}}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="user_id" value="{{auth()->user()->id}}">

                          <div class="form-group row">
                            <label for="inputFirstname" class="col-sm-3 col-form-label">Current Password</label>
                            <div class="col-sm-8">
                                <input type="text" name="firstname" class="form-control" id="inputFirstname">
                            </div>
                            @error('firstname')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                          </div>

                          <div class="form-group row">
                            <label for="inputFirstname" class="col-sm-3 col-form-label">New Password</label>
                            <div class="col-sm-8">
                                <input type="text" name="firstname" class="form-control" id="inputFirstname">
                            </div>
                            @error('firstname')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                          </div>

                          <div class="form-group row">
                            <label for="inputFirstname" class="col-sm-3 col-form-label">Confirm Password</label>
                            <div class="col-sm-8">
                                <input type="text" name="firstname" class="form-control" id="inputFirstname">
                            </div>
                            @error('firstname')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                          </div>

                          <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                              <button type="submit" class="btn btn-danger">Submit</button>
                            </div>
                          </div>
                        </form>
                      </div>
                      <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                  </div><!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
            @elseif(Auth::user()->user_type == 'staff')
            <div class="col-md-4">
                <div class="card card-primary card-outline">
                  <div class="card-body box-profile">
                    <div class="text-center">
                        @foreach ($profiles as $profile)
                      <img class="profile-user-img img-fluid img-circle"
                           src="{{asset('dist/img/user-profile/'.$profile->user_pic)}}"
                           alt="User profile picture">
                        @endforeach
                    </div>
                    @foreach ($profiles as $profile)
                    <h3 class="profile-username text-center">{{$profile->firstname}} {{$profile->middlename}} {{$profile->lastname}}</h3>

                    <p class="text-muted text-center">{{$profile->email}}</p>
                    @endforeach
                  </div>
                  <!-- /.card-body -->
                </div>
              </div>

              <div class="col-md-8">
                <div class="card">
                  <div class="card-header p-2">
                    <h3 class="text-center">Staff Settings</h3>
                  </div><!-- /.card-header -->
                  <div class="card-body">
                    <div class="tab-content">
                      <div class="active tab-pane" id="activity">

                      <div class="tab-pane" id="settings">
                        <form  class="form-horizontal" action="{{url('profile-create')}}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="user_id" value="{{auth()->user()->id}}">

                          <div class="form-group row">
                            <label for="inputFirstname" class="col-sm-3 col-form-label">Current Password</label>
                            <div class="col-sm-8">
                                <input type="text" name="firstname" class="form-control" id="inputFirstname">
                            </div>
                            @error('firstname')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                          </div>

                          <div class="form-group row">
                            <label for="inputFirstname" class="col-sm-3 col-form-label">New Password</label>
                            <div class="col-sm-8">
                                <input type="text" name="firstname" class="form-control" id="inputFirstname">
                            </div>
                            @error('firstname')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                          </div>

                          <div class="form-group row">
                            <label for="inputFirstname" class="col-sm-3 col-form-label">Confirm Password</label>
                            <div class="col-sm-8">
                                <input type="text" name="firstname" class="form-control" id="inputFirstname">
                            </div>
                            @error('firstname')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                          </div>

                          <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                              <button type="submit" class="btn btn-danger">Submit</button>
                            </div>
                          </div>
                        </form>
                      </div>
                      <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                  </div><!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>

            @else
            <div class="col-md-4">
                <div class="card card-primary card-outline">
                  <div class="card-body box-profile">
                    <div class="text-center">
                        @foreach ($profiles as $profile)
                      <img class="profile-user-img img-fluid img-circle"
                           src="{{asset('dist/img/user-profile/'.$profile->user_pic)}}"
                           alt="User profile picture">
                        @endforeach
                    </div>
                    @foreach ($profiles as $profile)
                    <h3 class="profile-username text-center">{{$profile->firstname}} {{$profile->middlename}} {{$profile->lastname}}</h3>

                    <p class="text-muted text-center">{{$profile->email}}</p>
                    @endforeach
                  </div>
                  <!-- /.card-body -->
                </div>
              </div>

            <div class="col-md-8">
                <div class="card">
                  <div class="card-header p-2">
                    <h3 class="text-center">User Settings</h3>
                  </div><!-- /.card-header -->
                  <div class="card-body">
                    <div class="tab-content">
                      <div class="active tab-pane" id="activity">

                      <div class="tab-pane" id="settings">
                        <form  class="form-horizontal" action="{{url('profile-create')}}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="user_id" value="{{auth()->user()->id}} === 'male' ? '/dist/img/male.png' : '/dist/img/female.png' "  >

                            <div class="form-group row">
                              <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                              <div class="col-sm-10">
                                  <input type="text" name="email" class="form-control" id="inputEmail">
                              </div>
                              @error('email')
                                  <div class="text-danger">{{$message}}</div>
                              @enderror
                            </div>

                          <div class="form-group row">

                            <label for="inputFirstname" class="col-sm-2 col-form-label">First Name</label>
                            <div class="col-sm-2">
                                <input type="text" name="firstname" class="form-control" id="inputFirstname">
                            </div>
                            @error('firstname')
                                <div class="text-danger">{{$message}}</div>
                            @enderror

                            <label for="inputLastname" class="col-sm-2 col-form-label">Lastname</label>
                            <div class="col-sm-2">
                              <input type="text" name="lastname" class="form-control" id="inputLastname">
                            </div>
                            @error('firstname')
                                <div class="text-danger">{{$message}}</div>
                            @enderror

                            <label for="inputMiddlename" class="col-sm-2 col-form-label">Middlename</label>
                            <div class="col-sm-2">
                                <input type="text" name="middlename" class="form-control" id="inputMiddlename">
                            </div>
                            @error('middlename')
                                <div class="text-danger">{{$message}}</div>
                            @enderror

                          </div>

                          {{-- <div class="form-group row">
                            <label for="inputMiddlename" class="col-sm-2 col-form-label">Middlename</label>
                            <div class="col-sm-10">
                                <input type="text" name="middlename" class="form-control" id="inputMiddlename" value="@foreach ($profiles as $profile)
                                {{$profile->firstname}} @endforeach">
                            </div>
                            @error('middlename')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                          </div> --}}

                          <div class="form-group row">

                            <label for="inputAge" class="col-sm-2 col-form-label">Age</label>
                            <div class="col-sm-4">
                                <input type="number" name="age" class="form-control" id="inputAge">
                            </div>
                            @error('age')
                                <div class="text-danger">{{$message}}</div>
                            @enderror

                            <label for="inputGender" class="col-sm-2 col-form-label">Gender</label>
                            <div class="col-sm-4">
                                <select  type="text" name="gender" class="form-select form-control" id="inputGender">
                                    <option hidden="true" value="#">--Select Gender--</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                   </select>
                            </div>
                            @error('gender')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                          </div>

                          <div class="form-group row">
                            <label for="inputAddress" class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-10">
                                <textarea type="text" name="address" class="form-control" id="inputAddress" placeholder="Please! make sure to complete your address."></textarea>
                            </div>
                            @error('address')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                          </div>

                          <div class="form-group row">

                            <label for="inputBarangay" class="col-sm-2 col-form-label">Barangay</label>
                            <div class="col-sm-4">
                                <select  type="text" name="barangay" class="form-select form-control" id="inputBarangay" >
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


                            <label for="inputPhonenumber" class="col-sm-2 col-form-label">Phone No. </label>
                            <div class="col-sm-4">
                                <input type="phone_number" name="age" class="form-control" id="inputPhonenumber" placeholder="09xxxxxxxxx">
                            </div>
                            @error('phone_number')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                          </div>

                          <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                                </label>
                              </div>
                            </div>
                          </div>

                          <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                              <button type="submit" class="btn btn-danger">Submit</button>
                            </div>
                          </div>
                        </form>
                      </div>
                      <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                  </div><!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
            @endif


          <!-- /.col -->

          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('layouts.components.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<!-- jQuery -->
<script src="{{asset('/plugins')}}/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('/plugins')}}/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('/plugins')}}/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="{{asset('/plugins')}}/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{asset('/plugins')}}/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{asset('/plugins')}}/jqvmap/jquery.vmap.min.js"></script>
<script src="{{asset('/plugins')}}/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('/plugins')}}/jquery-knob/jquery.knob.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('/plugins')}}/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{asset('/plugins')}}/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{asset('/plugins')}}/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('/dist')}}/js/adminlte.js"></script>

<script src="{{asset('/dist')}}/js/pages/dashboard.js"></script>

</body>
</html>
