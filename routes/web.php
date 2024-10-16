<?php


use Illuminate\Support\Facades\Route;

// Ruta principal
Route::get('/', function () {
    return 'Pantalla principal';
});

// Ruta de login
Route::get('/login', function () {
    return 'Login usuario';
});

// Ruta de logout
Route::get('/logout', function () {
    return 'Logout usuario';
});

// Ruta del catálogo
Route::get('/catalog', function () {
    return 'Listado películas';
});

// Ruta de detalle de película
Route::get('/catalog/show/{id}', function ($id) {
    return "Vista detalle película $id";
});

// Ruta para añadir película
Route::get('/catalog/create', function () {
    return 'Añadir película';
});

// Ruta para modificar película
Route::get('/catalog/edit/{id}', function ($id) {
    return "Modificar película $id";
});
