@extends('backend.master')

@section('title','Add-Category')

@section('content')
<div class="container-fluid  px-4">
    <div class="row g-4">
        <div class="col-md-8 offset-2">
            <div class="card mt-3">
                <div class="card-header">
                    <h2 class="text-center">Add category</h2>
                </div>

                <div class="card-body">
                    <form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="name">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Icon</label>
                            <input type="file" name="icon" class="form-control" id="name">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Add Category</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection