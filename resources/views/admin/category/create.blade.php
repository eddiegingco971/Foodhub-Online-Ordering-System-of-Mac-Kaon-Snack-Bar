@extends('admin.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-md-4 0ffset-md-4">
        <form action="{{url('/category')}}" method="POST">
            <div class="card">
                <div class="card-header">
                    <h2>Category Entry</h2>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="category_name" id="category_name"> Category Name</label>
                        <input type="category_name" class="category_name" placeholder="Category Name">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
@endsection

