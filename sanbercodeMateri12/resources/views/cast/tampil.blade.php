@extends('layouts.master')

@section('judul')
Halaman Tampil Category
@endsection

@section('content')
<a href="/cast/create" class="btn btn-primary btn-sn my-4">Tambah</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Umur</th>
      <th scope="col">Bio</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($cast as $index => $item)
    <tr>
        <th scope="row">{{$index +1}}</th>
        <td>{{$item->nama}}</td>
        <td>{{$item->umur}}</td>
        <td>{{$item->bio}}</td>
        <td>
            
            <form action="/cast/{{$item->id}}" method="POST">
            <a href="/cast/{{$item->id}}" class="btn btn-info btn-sm">Detail</a>
            <a href="/cast/{{$item->id}}/edit" class="btn btn-secondary btn-sm">Edit</a>
                @csrf
                @method('delete')
                <input type="submit" class="btn btn-danger btn-sm" value="delete">
                
        </td>
</tr>
    @empty
        <p>Cast kosong silahkan input cast</p>
    @endforelse
    </tbody>
</table>
@endsection
   
