<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\historialController;
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

Route::view('/', 'home')->name('home');

Route::get('/juego', [App\Http\Controllers\gameController::class, 'index'])->name('game');
Route::post('/juego', [App\Http\Controllers\gameController::class, 'play'])->name('game');

Route::get('historial', [App\Http\Controllers\historialController::class, 'index'])->name('historial.index');


