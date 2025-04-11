<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::post('register', [RegisterController::class, 'store'])->name('register.store');

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'store'])->name('login.store');

Route::get('dashboard', function () {
    return view('dashboard');
})->middleware('auth');
use Illuminate\Support\Facades\Auth;

Route::post('/logout', function () {
    Auth::logout();
    return redirect('login');
})->name('logout');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\NotificacionesController;
use App\Http\Controllers\UbicacionesController;
use App\Http\Controllers\ProveedorController;

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');  // Cambiado 'home' por 'dashboard'
Route::get('/productos', [ProductosController::class, 'index'])->name('productos');
Route::get('/notificaciones', [NotificacionesController::class, 'index'])->name('notificaciones');
Route::get('/ubicaciones', function () {
    abort(404); // Para forzar el error 403
})->name('ubicaciones');


Route::get('/proveedor', [ProveedorController::class, 'index'])->name('proveedor');

Route::get('/proveedor/productos', [ProveedorController::class, 'mostrarProductos']);