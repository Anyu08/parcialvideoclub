@extends('layouts.master')

@section('content')

<h1>Modificar película</h1>

<form action="{{ route('catalog.update', $pelicula->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label for="title">Título:</label>
        <input type="text" id="title" name="title" value="{{ $pelicula->title }}" required>
    </div>
    <div>
        <label for="year">Año:</label>
        <input type="number" id="year" name="year" value="{{ $pelicula->year }}" required>
    </div>
    <div>
        <label for="director">Director:</label>
        <input type="text" id="director" name="director" value="{{ $pelicula->director }}" required>
    </div>
    <div>
        <label for="poster">URL del Poster:</label>
        <input type="text" id="poster" name="poster" value="{{ $pelicula->poster }}" required>
    </div>
    <div>
        <label for="synopsis">Sinopsis:</label>
        <textarea id="synopsis" name="synopsis" required>{{ $pelicula->synopsis }}</textarea>
    </div>
    <button type="submit">Actualizar película</button>
</form>

@endsection
