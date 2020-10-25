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

Route::get('/juego', 'App\Http\Controllers\gameController@index')->name('game');
Route::get('/juego', 'App\Http\Controllers\gameController@play')->name('game');

Route::get('historial', 'App\Http\Controllers\historialController@index')->name('historial.index');
Route::get('historial/{post:slug}', 'App\Http\Controllers\historialController@show')->name('historial.show');


