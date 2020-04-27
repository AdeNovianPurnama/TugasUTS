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
    return view('welcome');
});
Route::get('/Profile', function () {
    return view('Profile/Bio');
});

Route::get('/Indomaret', 'IndomaretController@index');

Route::get('/Indomaret/Database/tambah', 'IndomaretController@tambah');
Route::post('Indomaret/Database/save', 'IndomaretController@save');

Route::get('/Indomaret/Database/edit/{id}', 'IndomaretController@edit');
Route::post('/Indomaret/update', 'IndomaretController@update');

Route::get('Indomaret/hapus/{id}', 'IndomaretController@hapus');