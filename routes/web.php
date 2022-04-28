<?php

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

Auth::routes();

Route::get('/inventario', [App\Http\Controllers\ProductoController::class, 'index'])->name('inventario.index');
Route::get('/inventario/create', [App\Http\Controllers\ProductoController::class, 'create'])->name('inventario.create');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');  
 