<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\identidadController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\UsuarioController;

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

Route::get('/identidad', function () {
    return view('/identidad.quienesomos');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::resource('identidad', identidadController::class);

Route::get('/identidad', [App\Http\Controllers\IdentidadController::class, 'index'])->name('identidad');

Route::get('/', [App\Http\Controllers\IdentidadController::class, 'create'])->name('mision');

Route::get('identidad.vision', [App\Http\Controllers\IdentidadController::class, 'show'])->name('vision');

Route::get('identidad.contactanos', [App\Http\Controllers\IdentidadController::class, 'contactanos'])->name('contacto');

Route::get('identidad.ayuda', [App\Http\Controllers\IdentidadController::class, 'ayuda'])->name('ayuda');

Route::resource('/usuarios', App\Http\Controllers\UsuarioController::class);

Route::get('/welcome', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');

Route::get('/error', [App\Http\Controllers\UsuarioController::class, 'error'])->name('error404');







