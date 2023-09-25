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
                            <a href="{{route('category.edit',$category->id)}}" class="btn btn-sm btn-success">Edit</a>
                            <form action="{{route('category.destroy',$category->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger mt-2" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection