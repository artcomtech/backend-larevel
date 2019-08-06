<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('admin/dashboard');
});

Route::get('/Kategori', 'Admin\KategoriController@index');
Route::post('Kategori/create', 'Admin\KategoriController@create');
Route::get('/Kategori/{id_kategori}/edit', 'Admin\KategoriController@edit');
Route::post('/Kategori/{id_kategori}/update', 'Admin\KategoriController@update');
Route::get('/Kategori/{id_kategori}/delete', 'Admin\KategoriController@destroy');

Route::get('/Informasi', 'Admin\InformasiController@index');
Route::get('/Informasi/create', 'Admin\InformasiController@create');


