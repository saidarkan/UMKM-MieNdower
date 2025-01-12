@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('about.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($abouts as $about)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $about->title }}</td>
                <td>{{ $about->description }}</td>
                <td>
                    <a href="{{ route('about.edit', $about->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('about.destroy', $about->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
