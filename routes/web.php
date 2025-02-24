<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VehiculosController;

// Ruta principal
Route::get('/', function () {
    return view('welcome');
});

// Rutas de autenticación
Auth::routes();

// Ruta del dashboard general
Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

// Grupo de rutas protegidas por autenticación
Route::middleware(['auth'])->group(function () {

    // Grupo de rutas para usuarios con rol "usuario"
    Route::middleware(['role:usuario'])->prefix('user')->group(function () {
        Route::get('/dashboard', [UserController::class, 'create'])->name('users.dashboard');
        Route::get('/crear_pedido', [PedidoController::class, 'create'])->name('user.Cviaje');
        Route::get('/rentaVehiculos', [VehiculosController::class, 'index'])->name('user.rentaV');
        Route::get('/misPedidos', [PedidoController::class, 'allPedidos'])->name('all.pedidos');
    });

    // // Grupo de rutas para administradores
    // Route::middleware(['role:admin'])->prefix('admin')->group(function () {
    //     Route::get('/dashboard', [HomeController::class, 'adminDashboard'])->name('admin.dashboard');
    //     Route::get('/usuarios', [UsuarioController::class, 'index'])->name('admin.usuarios');
    // });

});

// Grupo de rutas para gestión de usuarios
Route::resource('usuarios', UsuarioController::class);
