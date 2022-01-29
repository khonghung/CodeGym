@extends('backend.layout.master')
@section('title-btn', 'ADD AUTHOR')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Name</th>
                        <th>Date</th>
                        <th>Description</th>
                        <th>Action</th>
                        
                        
                    </tr>
                </thead>
               
                <tbody>
                    @foreach($authors as $key => $author)
                    <tr>
                        <td>{{ $author->id }}</td>
                        <td>{{ $author->name }}</td>
                        <td>{{ $author->date }}</td>
                        <td>{{ $author->description }}</td>
                        <td><a href="{{ route('author.edit', $author->id) }}" type='button' class='btn btn-warning'>Edit</a>
                        <a href="{{ route('author.delete', $author->id) }}" type='button' class='btn btn-danger'>Delete</a></td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection