<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PedidoController;

Route::resource('usuarios', UsuarioController::class);

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
Route::get('user/crear_pedido', [PedidoController::class, 'create'])->name('user.Cviaje');
Route::get('user/pedidos', [PedidoController::class, 'index'])->name('user.pedidos');


Route::middleware('auth')->group(function () {

Route::middleware('role:usuario')->group(function () {
    Route::get('user/dashboard', [UserController::class, 'create'])->name('users.dashboard');

});


});
