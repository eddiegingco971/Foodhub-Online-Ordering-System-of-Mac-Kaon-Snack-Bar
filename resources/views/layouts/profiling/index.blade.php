<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | User Profile</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('/plugins')}}/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('/dist')}}/css/adminlte.min.css">
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
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4">

            <!-- Profile Image -->

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

            <!-- /.card -->

            <!-- About Me Box -->

            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-8">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">

                  <div class="tab-pane" id="settings">
                    <form  class="form-horizontal" action="{{url('profile-create')}}" method="POST" enctype="multipart/form-data">
                        {{-- <input type="hidden" name="user_id" value="{{}}"> --}}

                      <div class="form-group row">
                        <label for="inputFirstname" class="col-sm-2 col-form-label">First Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="firstname" class="form-control" id="inputFirstname">
                        </div>
                        @error('firstname')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                      </div>

                      <div class="form-group row">
                        <label for="inputLastname" class="col-sm-2 col-form-label">Lastname</label>
                        <div class="col-sm-4">
                          <input type="text" name="lastname" class="form-control" id="inputLastname">
                        </div>
                        @error('firstname')
                            <div class="text-danger">{{$message}}</div>
                        @enderror

                        <label for="inputMiddlename" class="col-sm-2 col-form-label">Middlename</label>
                        <div class="col-sm-4">
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
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                               </select>
                        </div>
                        @error('barangay')
                            <div class="text-danger">{{$message}}</div>
                        @enderror


                        <label for="inputBarangay" class="col-sm-2 col-form-label">Barangay</label>
                        <div class="col-sm-4">
                            <select  type="text" name="barangay" class="form-select form-control" id="inputBarangay" >
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                               </select>
                        </div>
                        @error('barangay')
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
<script src="{{asset('/plugins')}}/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('/plugins')}}/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src=".{{asset('/dist')}}/js/adminlte.min.js"></script>

</body>
</html>
