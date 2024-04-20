@extends('layouts.master')

@section('judul')
Halaman Detail Cast
@endsection

@section('content')
<a href="/cast" class="btn btn-primary btn-sn my-4">Kembali</a>

<h1>{{$cast->nama}}</h1>
<p>{{$cast->umur}}</p>
<p>{{$cast->bio}}</p>
@endsection
   
