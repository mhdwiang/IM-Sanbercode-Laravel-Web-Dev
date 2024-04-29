@extends('layout.master')

@section('judul')
    Halaman Detail Pertanyaan
@endsection

@section('content')
    <a href="/question" class="btn btn-sm btn-primary my-3">Kembali</a>

            <div class="card">
                <img src="{{asset('image/' . $question->image)}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h2>{{$question->title}}</h2>
                  <p class="card-text">{{$question->content}}</p>
                </div>
              </div>
        </div>  
    </div>

@endsection
