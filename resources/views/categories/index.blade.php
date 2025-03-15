@extends('layouts.app')

@section('content')
    <h1>Daftar Kategori</h1>

    <!-- Form Tambah Kategori -->
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nama Kategori" required>
        <button type="submit">Tambah</button>
    </form>

    <ul>
        @foreach ($categories as $category)
            <li>
                <a href="{{ route('categories.show', $category->id) }}">{{ $category->name }}</a>
                <a href="{{ route('categories.edit', $category->id) }}">✏️</a>
                <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">❌</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
