<section class="content text-dark">
    <div class="container-fluid">
          <div class="card">
            <div class="card-header text-center">
              <h1>Category Entry</h1>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form action="{{url('category-create')}}" method="POST">
                  @csrf
                  <div class="form-group">
                      <label for="category_name" id="category_name"> Category Name</label>
                      <input type="category_name" name="category_name" class="form-control" placeholder="Category Name">
                  </div>
                 
                    <div class="form-group float-right mr-5">
                      <button type="submit" class="btn btn-info" style="position: relative; left:78%;">Save</button>
                  </div>

                </form>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
    </div>
</section>