<?php

use Illuminate\Support\Facades\Route;

Route::resource('/productos', 'App\Http\Controllers\ProductosController');
Route::resource('/pedidos', 'App\Http\Controllers\PedidosController');
Route::resource('/clientes', 'App\Http\Controllers\ClientesController');
Route::resource('/empleados', 'App\Http\Controllers\EmpleadosController');

Route::get('/', function () {
    return view('welcome');
});

