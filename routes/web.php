<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\VentaController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/prueba', function(){
//     return 'Esta es una ruta de prueba';
// });

Route::get('/', [RouteController::class, 'welcome']);


Route::get('/testsuma', [RouteController::class, 'suma']);


Route::get('/testplantilla', function () {
    return view('layouts.app');
});

Route::get('/contenido1', function () {
    return view('testcontenido');
});

// Route::get('/productos', function () {
//     return view('productos.lista');
// });

// Route::get('/productos', [ProductoController::class, 'listProductos'])->name('productos.lista');

Route::resource('productos', ProductoController::class);

Route::get('ventas/create', [VentaController::class,'create'])->name('ventas.create');

Route::post('/ventas', [VentaController::class,'store'])->name('ventas.store');