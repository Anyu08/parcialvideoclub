<!-- resources/views/catalog/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Catálogo de Películas</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ url('/catalog/create') }}" class="btn btn-primary mb-3">Agregar Nueva Película</a>

    <table class="table">
        <thead>
            <tr>
                <th>Título</th>
                <th>Año</th>
                <th>Director</th>
                <th>Renta</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($peliculas as $pelicula)
                <tr>
                    <td>{{ $pelicula->title }}</td>
                    <td>{{ $pelicula->year }}</td>
                    <td>{{ $pelicula->director }}</td>
                    <td>{{ $pelicula->rented ? 'Sí' : 'No' }}</td>
                    <td>
                        <a href="{{ url('/catalog/show/' . $pelicula->id) }}" class="btn btn-info">Ver</a>
                        <a href="{{ url('/catalog/edit/' . $pelicula->id) }}" class="btn btn-warning">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

 //Danna martinez y Jimena hortua - Frameworks