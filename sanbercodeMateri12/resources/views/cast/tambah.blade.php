@extends('layouts.master')

@section('judul')
Halaman Tambah Cast
@endsection

@section('content')

<form method="POST" action="/cast">
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
    <label>Nama Cast</label>
    <input type="text" name="nama" class="form-control">
  </div>
  <div class="form-group">
    <label>Umur</label>
    <input type="text" name="umur" class="form-control">
  </div>
  <div class="form-group">
    <label>Bio</label>
    <textarea class="form-control" name="bio" cols="30" rows="10"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
   
