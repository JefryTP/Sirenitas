<?php

use App\Http\Controllers\ReservaController;
use App\Http\Controllers\PedidoController;
use Illuminate\Support\Facades\Route;

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
Route::post('reservas',[ReservaController::class,'store'])->name('reservas.store');
Route::post('pedidos',[PedidoController::class,'store'])->name('pedidos.store');
