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
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::get("/daftar_paket/tambah", "PaketController@tambah");
Route::post("/daftar_paket/tambah_jam", "PaketController@tambah_jam");
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');