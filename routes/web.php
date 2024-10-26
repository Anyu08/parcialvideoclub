<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

/*
|-------------------------------------------------------------------------- 
| Web Routes 
|-------------------------------------------------------------------------- 
| 
| Here is where you can register web routes for your application. These 
| routes are loaded by the RouteServiceProvider and all of them will 
| be assigned to the "web" middleware group. Make something great! 
| 
*/

// Pantalla principal
Route::get('/', function () {
    return redirect()->action([HomeController::class, 'index']);
});

// Rutas de autenticación generadas por Laravel (login, registro, etc.)
Auth::routes();

// Ruta de inicio que redirige a la página de catálogo después de autenticarse
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Grupo de rutas protegidas por autenticación para el catálogo
Route::middleware(['auth'])->group(function () {
    // Ruta para mostrar todas las películas
    Route::get('/catalog', [CatalogController::class, 'getIndex'])->name('catalog');

    // Ruta para mostrar el formulario de creación de una nueva película
    Route::get('/catalog/create', [CatalogController::class, 'getCreate']);

    // Ruta para almacenar una nueva película en la base de datos
    Route::post('/catalog', [CatalogController::class, 'postStore']);

    // Ruta para mostrar el detalle de una película específica
    Route::get('/catalog/show/{id}', [CatalogController::class, 'getShow']);

    // Ruta para mostrar el formulario de edición de una película
    Route::get('/catalog/edit/{id}', [CatalogController::class, 'getEdit']);

    // Ruta para actualizar una película en la base de datos
    Route::put('/catalog/edit/{id}', [CatalogController::class, 'putUpdate']);
});
