@extends('backend.master')

@section('title','Dashboard')

@section('content')
<div class="container-fluid px-4">
    
    <div class="card mt-3">
        <div class="card-header">
            <h2>Manage Category</h2>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Icon</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Icon</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$category->name}}</td>
                        <td><img src="{{asset($category->icon)}}" alt="" height="60" width="80"></td>
                        <td>{{$category->status == 1 ?'Active':'Inactive'}}</td>
                        <td>
                            <a href="" class="btn btn-sm btn-success">Edit</a>
                            <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection