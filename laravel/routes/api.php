<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\v1\CategoriasController;
use App\Http\Controllers\v1\ClientesController;
use App\Http\Controllers\v1\ProveedoresController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/*---------------------categorias----------------- */
Route::get('/categorias', [CategoriasController::class, 'obtenerLista']);
Route::get('/categorias/{id}', [CategoriasController::class, 'obtenerItem']);

Route::post('/categorias', [CategoriasController::class, 'storage']);//storage=guardar
Route::put('/categorias', [CategoriasController::class, 'udpate']);//actualizar
Route::patch('/categorias', [CategoriasController::class, 'patch']);

Route::delete('/categorias/{id}', [CategoriasController::class, 'delete']);//storage=guardar




/*---------------------CLIENTES----------------- */
Route::get('/clientes', [ClientesController::class, 'obtenerLista']);
Route::get('/clientes/{id}', [ClientesController::class, 'obtenerItem']);

Route::post('/clientes', [ClientesController::class, 'storage']);//storage=guardar
Route::put('/clientes', [ClientesController::class, 'udpate']);//actualizar
Route::patch('/clientes', [ClientesController::class, 'patch']);


Route::delete('/clientes/{id}', [ClientesController::class, 'delete']);//storage=guardar



/*---------------------PROVEEDORES----------------- */
Route::get('/proveedores', [ProveedoresController::class, 'obtenerLista']);
Route::get('/proveedores/{id}', [ProveedoresController::class, 'obtenerItem']);


Route::post('/proveedores', [ProveedoresController::class, 'storage']);//storage=guardar
Route::put('/proveedores', [ProveedoresController::class, 'udpate']);//actualizar
Route::patch('/proveedores', [ProveedoresController::class, 'patch']);



Route::delete('/proveedores/{id}', [ProveedoresController::class, 'delete']);//storage=guardar


