<?php

// app/Http/Controllers/ProductosController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index()
    {
        // Aquí puedes obtener productos desde la base de datos si lo deseas.
        // Por ejemplo, con Eloquent:
        // $productos = Producto::all();

        return view('productos');  // Retorna la vista productos.blade.php
    }
}
