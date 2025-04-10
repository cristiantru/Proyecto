<?php

// app/Http/Controllers/NotificacionesController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificacionesController extends Controller
{
    public function index()
    {
        // Aquí puedes obtener las notificaciones del usuario si lo deseas.
        // Por ejemplo, con Eloquent:
        // $notificaciones = Notificacion::where('user_id', auth()->id())->get();

        return view('notificaciones');  // Retorna la vista notificaciones.blade.php
    }
}
