@extends('layout.master')

@section('judul')
    Halaman Edit Category
@endsection

@section('content')
    <form method="POST" action="/category/{{$category->id}}">
        @csrf

        @method('PUT')

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <div class="form-group">
            <label>Category Name</label>
            <input type="text" class="form-control" name="name" value="{{$category->name}}">
        </div>

        <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" name="description" cols="30" rows="10">{{$category->description}}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
