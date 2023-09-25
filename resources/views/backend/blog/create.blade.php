@extends('backend.master')

@section('title','Add-Blog')

@section('content')
<div class="container-fluid  px-4">
    <div class="row g-4">
        <div class="col-md-8 offset-2">
            <div class="card mt-3">
                <div class="card-header">
                    <h2 class="text-center">Add Blog</h2>
                </div>

                <div class="card-body">
                    <form action="{{route('blog.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="name">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label><br>
                            <textarea id="editor" name="w3review" rows="4" cols="50">
                                At w3schools.com you will learn how to make a website. They offer free tutorials in all web development technologies.
                                </textarea>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Icon</label>
                            <input type="file" name="icon" class="form-control" id="name">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Add Blog</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection