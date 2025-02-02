<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::resource('usuarios', UsuarioController::class);

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {

// // Ruta para usuarios con rol "admin"
// Route::middleware('role:admin')->group(function () {
//     Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
// });

// Ruta para usuarios con rol "usuario"
Route::middleware('role:usuario')->group(function () {
    Route::get('/dashboard', [UserController::class, 'index'])->name('users.dashboard');
});

// // Ruta para usuarios con rol "transportista"
// Route::middleware('role:transportista')->group(function () {
//     Route::get('/transportista', [TransportistaController::class, 'index'])->name('transportista.dashboard');
// });


});
