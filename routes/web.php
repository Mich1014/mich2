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

Route::get('/ejemplo', function () {
    return view('formulario');
});
 /*Con codigo de arriba se crea una ruta y el archivo que esta va a abrir

    Ejemplo
    Route::get('ruta que se pone en el navegador', function () {
    return view('archivo que va a abrir');
    });
*/

/*
Route::view('rutamich', 'formulario');

Route::post("rutamich", [FormularioController::class,'save']);

Route::get('/rutamich', function () {
    return view('formulario');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
