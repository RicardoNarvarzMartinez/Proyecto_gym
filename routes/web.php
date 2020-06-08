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



//lista de suscriptores FAIL

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

Route::get('/Registro', function () {
    return view('Registro');
});

Route::get('/Lista', function () {
    return view('Lista');

});


Route::get('/correo', function () {
    return view('Correo'); //correo FAIL
});

Route::get('/Estatus', function () {
    return view('Estatus'); //estatus FAIL
});

Route::get('/pago', function () { //pago FAIL
    return view('pago');
});


//autenticacion Laravel
Auth::routes();  
Route::get('/home', 'HomeController@index')->name('home');

//Cobrador
Route::get('/Cobrador', 'CobradoresController@index')->middleware('auth');

//suscriptor
Route::get('/Suscriptor', 'SuscriptoresController@index')->middleware('auth');

//Servicios
Route::resource('/Servicio', 'ServicioController');


//verifacion uso de ajax.

Route::get('/autocomplete', 'AutocompleteController@index');
Route::post('/autocomplete/fetch', 'AutocompleteController@fetch')->name('autocomplete.fetch');
Route::post('/autocomplete/check', 'AutocompleteController@check')->name('autocomplete.check');

Route::post('/register/check', 'AutocompleteController@check')->name('register.check');
