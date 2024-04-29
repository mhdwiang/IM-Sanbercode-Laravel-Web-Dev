@extends('layout.master')

@section('judul')
    Halaman Edit Pertanyaan
@endsection

@section('content')
    <form method="POST" enctype="multipart/form-data" action="/question/{{$question->id}}">
        @method('put')
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
            <label>Title Question</label>
            <input type="text" value="{{$question->title}}" class="form-control" name="title">
        </div>

        <div class="form-group">
            <label>Content</label>
            <textarea class="form-control" name="content" cols="30" rows="10">{{$question->content}}</textarea>
        </div>

        <div class="form-group">
            <label>Image</label>
            <input type="file" class="form-control" name="image">
        </div>

        <div class="form-group">
            <label>Category</label>
            <select name="category_id" id="">
                <option value="">--Select a Category--</option>
                @forelse ($category as $item)
                    @if ($item->id === $question->category_id)
                    <option value="{{$item->id}}" selected>{{$item->name}}</option>
                    @else
                    <option value="{{$item->id}}">{{$item->name}}</option>
                    @endif
                @empty
                    <option value="">--Category Empty--</option>
                @endforelse
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
