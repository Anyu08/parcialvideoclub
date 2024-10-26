<?php 

namespace App\Http\Controllers;

use App\Models\Movies;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller; // Asegúrate de incluir esto

class CatalogController extends Controller
{
    // Mostrar todas las películas
    public function getIndex()
    {
        // Obtener todas las películas desde la base de datos
        $peliculas = Movies::all();

        // Retornar la vista del catálogo con las películas
        return view('catalog.index', ['peliculas' => $peliculas]);
    }

    // Mostrar el formulario de creación de una nueva película
    public function getCreate()
    {
        // Retornar la vista del formulario de creación
        return view('catalog.create');
    }

    // Almacenar una nueva película en la base de datos
    public function postStore(Request $request)
    {
        // Validar los datos del formulario de creación
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'year' => 'required|string|max:8',
            'director' => 'required|string|max:64',
            'poster' => 'nullable|string',
            'synopsis' => 'nullable|string',
        ]);

        // Crear una nueva película en la base de datos con los datos validados
        Movies::create(array_merge($validatedData, ['rented' => false]));

        // Redirigir al catálogo principal con un mensaje de éxito
        return redirect('/catalog')->with('success', 'Película creada exitosamente.');
    }

    // Mostrar el detalle de una película específica
    public function getShow($id)
    {
        // Buscar la película por su ID
        $pelicula = Movies::findOrFail($id);

        // Retornar la vista con los detalles de la película
        return view('catalog.show', ['pelicula' => $pelicula]);
    }

    // Mostrar el formulario de edición de una película específica
    public function getEdit($id)
    {
        // Buscar la película por su ID
        $pelicula = Movies::findOrFail($id);

        // Retornar la vista de edición con los datos de la película
        return view('catalog.edit', ['pelicula' => $pelicula]);
    }

    // Actualizar una película en la base de datos
    public function putUpdate(Request $request, $id)
    {
        // Buscar la película por su ID
        $pelicula = Movies::findOrFail($id);

        // Validar los datos de entrada
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'year' => 'required|string|max:8',
            'director' => 'required|string|max:64',
            'poster' => 'nullable|string',
            'synopsis' => 'nullable|string',
        ]);

        // Actualizar los campos de la película
        $pelicula->update($validatedData); // Esto actualiza solo los campos relevantes

        // Redirigir a la vista detalle de la película editada
        return redirect()->action([CatalogController::class, 'getShow'], ['id' => $pelicula->id])->with('success', 'Película actualizada exitosamente.');
    }
}
