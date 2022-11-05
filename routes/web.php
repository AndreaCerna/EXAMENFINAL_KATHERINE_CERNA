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

Route::get('registrarmedicamento', 'App\Http\Controllers\micontrolador@registrarmedicamento')->name('registrarmedicamento');
Route::post('guardarmedicamento', 'App\Http\Controllers\micontrolador@guardarmedicamento')->name('guardarmedicamento');

Route::get('consultarmedicamento', 'App\Http\Controllers\micontrolador@consultarmedicamento')->name('consultarmedicamento');
Route::get('eliminarmedicamento/{id}', 'App\Http\Controllers\micontrolador@eliminarmedicamento')->name('eliminarmedicamento');

Route::get('muestramedicamento/{id}', 'App\Http\Controllers\micontrolador@muestramedicamento')->name('muestramedicamento');
Route::post('editamedicamento/{id}', 'App\Http\Controllers\micontrolador@editamedicamento')->name('editamedicamento');



Route::get('registrararticulo', 'App\Http\Controllers\micontrolador2@registrararticulo')->name('registrararticulo');
Route::post('guardararticulo', 'App\Http\Controllers\micontrolador2@guardararticulo')->name('guardararticulo');

Route::get('consultararticulo', 'App\Http\Controllers\micontrolador2@consultararticulo')->name('consultararticulo');
Route::get('eliminararticulo/{id}', 'App\Http\Controllers\micontrolador@eliminararticulo')->name('eliminararticulo');

Route::get('muestraarticulo/{id}', 'App\Http\Controllers\micontrolador2@muestraarticulo')->name('muestraarticulo');
Route::post('editaarticulo/{id}', 'App\Http\Controllers\micontrolador2@editaarticulo')->name('editaarticulo');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
