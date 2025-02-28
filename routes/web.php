<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VehiculosController;
use App\Http\Controllers\TransportistaController;


// Ruta principal
Route::get('/', function () {
    return view('welcome');
});

// Rutas de autenticación
Auth::routes();

// Ruta del dashboard general
Route::get('/dashboard', function () {
    $user = auth()->user();

    if (!$user) {
        return redirect('/login')->with('error', 'Debes iniciar sesión primero.');
    }

    switch ($user->rol) {
        case 'usuario':
            return redirect()->route('users.dashboard');
        case 'transportista':
            return redirect()->route('transportistas.dashboard');
        default:
            return redirect('/')->with('error', 'Rol no válido.');
    }
})->middleware('auth');

// Grupo de rutas protegidas por autenticación
Route::middleware(['auth'])->group(function () {


    // Grupo de rutas para usuarios con rol "usuario"
    Route::middleware(['role:usuario'])->prefix('user')->group(function () {
        Route::get('/dashboard', [UserController::class, 'index'])->name('users.dashboard');    
        Route::get('/crear_pedido', [PedidoController::class, 'create'])->name('user.Cviaje');
        Route::get('/rentaVehiculos', [VehiculosController::class, 'index'])->name('user.rentaV');
        Route::get('/misPedidos', [PedidoController::class, 'allPedidos'])->name('all.pedidos');
        Route::get('/nosotros', [UserController::class, 'nosotros'])->name('user.nosotros');

    });
    Route::middleware(['role:transportista'])->prefix('transportista')->group(function () {
        Route::get('/dashboard', [TransportistaController::class, 'index'])->name('transportistas.dashboard');
        Route::get('/viajes', [TransportistaController::class, 'viajes'])->name('transportistas.viajes');
        Route::get('/nosotros', [TransportistaController::class, 'nosotros'])->name('transportistas.nosotros');

    });

    // // Grupo de rutas para administradores
    // Route::middleware(['role:admin'])->prefix('admin')->group(function () {
    //     Route::get('/dashboard', [HomeController::class, 'adminDashboard'])->name('admin.dashboard');
    //     Route::get('/usuarios', [UsuarioController::class, 'index'])->name('admin.usuarios');
    // });

});

// Grupo de rutas para gestión de usuarios
Route::resource('usuarios', UsuarioController::class);
