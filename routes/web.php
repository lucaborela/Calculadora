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

Route::get('/telainicial', '\App\Http\Controllers\CalculadoraController@telainicial');


Route::get('/soma', '\App\Http\Controllers\CalculadoraController@soma');

Route::post ('somar','\App\Http\Controllers\CalculadoraController@somar')->name ('somar');

Route::get('/subtração', '\App\Http\Controllers\CalculadoraController@subtração');

Route::post ('subtrair','\App\Http\Controllers\CalculadoraController@subtrair')->name ('subtrair');

Route::get('/multiplicação', '\App\Http\Controllers\CalculadoraController@multiplicação');

Route::post('/multiplicar', '\App\Http\Controllers\CalculadoraController@multiplicar')->name ('multiplicar');

Route::get('/divisão', '\App\Http\Controllers\CalculadoraController@divisão');

Route::post('/dividir', '\App\Http\Controllers\CalculadoraController@dividir')->name ('dividir');


