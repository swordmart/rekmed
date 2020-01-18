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

Route::get('/', 'IndexController@index');
Route::get('/proses/{id}', 'IndexController@proses');
Route::post('/proses/{id}', 'IndexController@prosesdata');
Route::get('/prosesdokter/{id}', 'IndexController@prosesdokter');
Route::post('/prosesdokter/{id}', 'IndexController@prosesdatadokter');


Auth::routes(['register'=>false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/dokter', 'DokterController');
Route::resource('/perawat', 'PerawatController');
Route::get('/pasien/register', 'PasienController@register');
Route::resource('/pasien', 'PasienController');

Route::get('/antrian', 'AntrianController@index');
Route::get('/antri', 'AntrianController@antri');
