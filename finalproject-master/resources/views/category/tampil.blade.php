@extends('layout.master')

@section('judul')
    Halaman Tampil Category
@endsection

@section('content')
    <a href="/category/create" class="btn btn-primary btn-sm my-4">Tambah</a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($category as $index => $item)
                <tr>
                    <th scope="row">{{ $index + 1 }}</th>
                    <td>{{ $item->name }}</td>
                    <td>
                        <form action="/category/{{ $item->id }}" method="POST">
                            <a href="/category/{{ $item->id }}" class="btn btn-info btn-sm">Detail</a>
                            <a href="/category/{{ $item->id }}/edit" class="btn btn-secondary btn-sm">edit</a>
                            @csrf
                            @method('delete')
                            <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                        </form>
                    </td>
                </tr>
            @empty
                <p>Category kosong!!! Silahkan input</p>
            @endforelse

        </tbody>
    </table>
@endsection
