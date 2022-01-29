@extends('backend.layout.master')
@section('content')


    <div class="p-5">
        <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Update</h1>
        </div>
        <form class="user" method="post" action="{{ route('author.update', $author[0]->id) }}">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control form-control-user" name='name' value='{{ $author[0]->name}}' placeholder="Name">
            </div>

            <div class="form-group">
                <input type="date" class="form-control form-control-user" name="date" value='{{ $author[0]->date }}' placeholder="Date">
            </div>

            <div class="form-group">
                <input type="text" class="form-control form-control-user" name='desc' value='{{ $author[0]->description}}' placeholder="Description">
            </div>

            <div class="row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                        UPDATE</button>
                </div>

                <div class="col-sm-6 mb-3 mb-sm-0">
                    <a href="{{ route('author.index') }}" class="btn btn-secondary btn-user btn-block">
                        CANCEL</a>
                </div>


            </div>

        </form>
       
    </div>


@endsection