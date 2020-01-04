<?php

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
    return view('index');
});

Auth::routes(['register'=>false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/dokter', 'DokterController');
Route::resource('/perawat', 'PerawatController');
Route::resource('/pasien', 'PasienController');

Route::get('/antrian', 'AntrianController@index');
Route::post('/antri', 'AntrianController@antri');
