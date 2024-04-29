@extends('layout.master')

@section('judul')
    Halaman Tambah Category
@endsection

@section('content')
    <form method="POST" action="/category">
        @csrf

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
            <input type="text" class="form-control" name="name">
        </div>

        <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" name="description" cols="30" rows="10"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
