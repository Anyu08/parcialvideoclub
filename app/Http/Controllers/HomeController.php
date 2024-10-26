<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * Aplica el middleware de autenticación para proteger las rutas de este controlador.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth'); // Asegura que solo usuarios autenticados accedan a las funciones
    }

    /**
     * Show the application dashboard.
     *
     * Retorna la vista del dashboard de la aplicación.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home'); // Retorna la vista 'home'
    }
}
