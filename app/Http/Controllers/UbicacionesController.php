<?php

// app/Http/Controllers/UbicacionesController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UbicacionesController extends Controller
{
    public function index()
    {
        // Aquí puedes obtener las ubicaciones del usuario si lo deseas.
        // Por ejemplo, con Eloquent:
        // $ubicaciones = Ubicacion::where('user_id', auth()->id())->get();

        return view('ubicaciones');  // Retorna la vista ubicaciones.blade.php
    }
}
