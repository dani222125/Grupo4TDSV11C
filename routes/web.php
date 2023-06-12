<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $nombres = 'Erikson Alexander García Polanco -- Daniela Alejandra Sanabria Perez -- Mario Eduardo Amaya Martinez -- Carlos Eduardo Barrera Baires';
    $grupo = ' TDSV11C';
    return view('Inicio', compact('nombres', 'grupo'));
});

//CRUD Clientes
Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes.index');;
Route::get('/clientes/create', [ClienteController::class, 'create'])->name('clientes.create');
Route::post('/clientes', [ClienteController::class, 'store'])->name('clientes.store');
Route::get('/clientes/{id}', [ClienteController::class, 'show']);
Route::get('/clientes/{id}/edit', [ClienteController::class, 'update']);
Route::put('/clientes/{id}', [ClienteController::class, 'update']);
Route::delete('/clientes/{id}', [ClienteController::class, 'destroy']);
Route::get('/clientes/editar/{id_cliente}', [ClienteController::class, 'edit'])->name('clientes.edit');
Route::delete('/clientes/{id}', [ClienteController::class, 'destroy'])->name('clientes.destroy');
Route::put('/clientes/{id}', [ClienteController::class, 'update'])->name('clientes.update');
//Route::get('/clientes', 'ClienteController@index')->name('clientes.index');


//CRUD Pedidos
Route::get('/pedidos', [PedidoController::class, 'index'])->name('pedidos.index');
Route::get('/pedidos/create', [PedidoController::class, 'create'])->name('pedidos.create');
Route::post('/pedidos', [PedidoController::class, 'store'])->name('pedidos.store');
Route::get('/pedidos/{id}', [PedidoController::class, 'show'])->name('pedidos.show');
Route::get('/pedidos/{id}/edit', [PedidoController::class, 'edit'])->name('pedidos.edit');
Route::put('/pedidos/{id}', [PedidoController::class, 'update'])->name('pedidos.update');
Route::delete('/pedidos/{id}', [PedidoController::class, 'destroy'])->name('pedidos.destroy');
