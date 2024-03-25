<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReservarController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.loader');
});


Route::get('/login', [LoginController::class, 'index'])->name('auth.login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/register', [RegisterController::class, 'index'])->name('auth.register');
Route::post('/register', [RegisterController::class, 'register']);

Route::middleware('auth')->group(function () {
    // Rutas protegidas que requieren autenticación
    Route::get('/principal', [HomeController::class, 'index'])->name('admin.home.index');
    Route::get('/pedidos', [PedidosController::class, 'index'])->name('admin.home.pedidos');
    Route::get('/reservar{value}', [ReservarController::class,'index'])->name('admin.home.reservas');
    Route::get('/cart', [CartController::class,'index'])->name('admin.home.cart');
    Route::post('/cart{product_Id}', [CartController::class,'delete'])->name('admin.home.cartDel');
});

