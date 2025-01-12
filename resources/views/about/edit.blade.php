@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ isset($about) ? route('about.update', $about->id) : route('about.store') }}" method="POST">
        @csrf
        @if(isset($about))
            @method('PUT')
        @endif
        <div class="form-group">
            <label for="title">Judul</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $about->title ?? '') }}">
        </div>
        <div class="form-group">
            <label for="description">Deskripsi</label>
            <textarea name="description" class="form-control">{{ old('description', $about->description ?? '') }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
