@extends('layout.master')

@section('judul')
    Halaman Detail Kategory
@endsection

@section('content')
    <a href="/category/" class="btn btn-primary btn-sm my-4">Kembali</a>
    <h1>{{$category->name}}</h1>
    <p>{{$category->description}}</p>
@endsection