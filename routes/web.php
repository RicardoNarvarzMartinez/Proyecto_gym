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

Route::get('/Registro', function () {
    return view('Registro');
});

Route::get('/login', function () {
    return view('login2');
});

Route::get('/Cobrador', function () {
    return view('Cobrador');
});

Route::get('/Lista', function () {
    return view('Lista');

});

Route::get('/ListaSuscriptores', function () {
    return view('ListaSuscrip');
});

Route::get('/Suscrito1', function () {
    return view('Suscritos/Carlos');

});
Route::get('/Suscrito2', function () {
    return view('Suscritos/Ruby');

});

Route::get('/Suscrito3', function () {
    return view('Suscritos/Oscar');

});

Route::get('/correo', function () {
    return view('Correo');
});

Route::get('/Suscriptor', function () {
    return view('Suscriptor');
});
Route::get('/Estatus', function () {
    return view('Estatus');
});

Route::get('/pago', function () { 
    return view('pago');
});

Route::get('/Servicio', function () {
    return view('Servicio');
});



Route::resource('/Servicio', 'ServicioController');

