<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductoController;

Route::resource('usuarios', UsuarioController::class);

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

Route::middleware('auth')->group(function () {

// // Ruta para usuarios con rol "admin"
// Route::middleware('role:admin')->group(function () {
//     Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
// });

// Ruta para usuarios con rol "usuario"
Route::middleware('role:usuario')->group(function () {
    Route::get('user/dashboard', [UserController::class, 'index'])->name('users.dashboard');
});

// // Ruta para usuarios con rol "transportista"
// Route::middleware('role:transportista')->group(function () {
//     Route::get('/transportista', [TransportistaController::class, 'index'])->name('transportista.dashboard');
// });


});
