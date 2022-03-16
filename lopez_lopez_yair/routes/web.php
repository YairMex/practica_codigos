<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\codigosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('inicio', [codigosController::class, 'mostrarCodigos'])->name('ver.codigos');

Route::post("inicio", [codigosController::class, 'mostrarCodigos']);
Route::view("login","inicio");
Route::get("/{Ids}", [codigosController::class, 'verMunicipio'])->name('ver.municipio');
Route::get("/ok/{id}", [codigosController::class, 'verEstado'])->name('ver.estado');
