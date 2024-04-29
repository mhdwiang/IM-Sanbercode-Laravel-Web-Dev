@extends('layout.master')

@section('judul')
    Halaman Tampil Pertanyaan
@endsection

@section('content')

    @auth
    <a href="/question/create" class="btn btn-sm btn-primary my-3">Tambah</a>
    @endauth

    <div class="row">
        @forelse ($question as $item)
        <div class="col-4">
            <div class="card">
                <img src="{{asset('image/' . $item->image)}}" class="card-img-top" height="200px" alt="...">
                <div class="card-body">
                  <h2>{{$item->title}}</h2>
                  <p class="card-text">{{Str::limit($item->content, 200, ' ...')}}</p>
                  <a href="/question/{{$item->id}}" class="btn btn-primary btn-block">Detail</a>

                  @auth
                  <div class="row my-2">
                    <div class="col">
                        <a href="/question/{{$item->id}}/edit" class="btn btn-warning btn-block">Edit</a>
                    </div>
                    <div class="col">
                        <form action="/question/{{$item->id}}" method="POST">
                            @method('delete')
                            @csrf
                            <input type="submit" class="btn btn-danger btn-block" value="Delete">
                        </form>
                    </div>
                  </div>
                  @endauth
                </div>
              </div>
        </div>  
        @empty
        <h4>Belum Ada Pertanyaan</h4>
        @endforelse
        
    </div>

@endsection
