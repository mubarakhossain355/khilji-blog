@extends('backend.master')

@section('title','Edit-Category')

@section('content')
<div class="container-fluid  px-4">
    <div class="row g-4">
        <div class="col-md-8 offset-2">
            <div class="card mt-3">
                <div class="card-header">
                    <h2 class="text-center">Edit Category</h2>
                </div>

                <div class="card-body">
                    <form action="{{route('category.update',$category->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" value="{{$category->name}}" class="form-control" id="name">
                        </div>
                        <div class="mb-3">
                            <img src="{{asset($category->icon)}}" alt="" height="60" width="80">
                            <br><br>
                            <label for="name" class="form-label">Icon</label>
                            <input type="file" name="icon" class="form-control" id="name">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Update Category</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection