@extends('layouts.app')

@section('content')
    <h1>Edit Kategori</h1>
    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{ $category->name }}" required>
        <button type="submit">Update</button>
    </form>
    <a href="{{ route('categories.index') }}">Kembali</a>
@endsection
