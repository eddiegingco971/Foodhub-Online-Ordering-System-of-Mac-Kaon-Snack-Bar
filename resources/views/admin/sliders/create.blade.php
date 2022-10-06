<section class="content">
    <div class="container-fluid">
          <div class="card elevation-3">
            <div class="card-header text-center">
              <h2>Slider Entry</h2>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form action="{{url('slider-create')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                      <label for="name" id="name"> Slider Name</label>
                      <input type="name" name="name" class="form-control" placeholder="Slider Name">
                      @error('name')
                      <div class="text-danger">{{$message}}</div>
                      @enderror
                  </div>
                  <div class="form-group mb-3">
                    <label for="image" class="col-form-label">Slider Image</label>
                    <input type="file" name="image" class="form-control" id="image">

                    @error('image')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                  </div>
                 
                    <div class="form-group float-right mr-5">
                      <button type="submit" class="btn btn-info" style="position: relative; left:78%;">Add</button>
                  </div>

                </form>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
    </div>
</section>