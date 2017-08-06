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
    return view('auth.login');
});

Route::group(['prefix'=>'admin', 'middleware'=>['auth']], function (){
Route::resource('karyawan', 'KaryawanController');

});
Route::resource('Barang', 'BarangController');
Route::resource('Suplier', 'SuplierController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
