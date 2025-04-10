<?php

// app/Http/Controllers/ProveedorController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public function index()
    {
        // Aquí puedes obtener los proveedores desde la base de datos si lo deseas.
        // Por ejemplo, con Eloquent:
        // $proveedores = Proveedor::all();

        return view('proveedor');  // Retorna la vista proveedor.blade.php
    }
}
