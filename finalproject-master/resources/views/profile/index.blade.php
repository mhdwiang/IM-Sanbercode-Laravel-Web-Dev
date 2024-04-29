@extends('layout.master')

@section('judul')
    Halaman Update Profile
@endsection

@section('content')
<form action="/profile/{{$detailProfile->id}}" method="POST">
        @csrf
        @method('put')

        <div class="form-group">
            <label>Nama User</label>
            <input type="text" class="form-control" value="{{$detailProfile->user->name}}" disabled>
        </div>
        <div class="form-group">
            <label>Email User</label>
            <input type="text" class="form-control" value="{{$detailProfile->email}}" disabled>
        </div>

        <div class="form-group">
            <label>Umur</label>
            <input type="number" class="form-control" value="{{$detailProfile->umur}}" name="umur">
        </div>
        @error('umur')
        <div class="alert alert-danger">{{ $message }}<div>
        @enderror
        <div class="form-group">
            <label>Alamat</label>
            <textarea class="form-control" name="alamat" cols="30" rows="10">{{$detailProfile->alamat}}</textarea>
        </div>
        @error('alamat')
        <div class="alert alert-danger">{{ $message }}<div>
        @enderror
        <div class="form-group">
            <label>Biodata</label>
            <textarea class="form-control" name="biodata" cols="30" rows="10">{{$detailProfile->biodata}}</textarea>
        </div>
        @error('biodata')
        <div class="alert alert-danger">{{ $message }}<div>
        @enderror
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection