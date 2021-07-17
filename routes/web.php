<?php

use App\Http\Controllers;
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

Route::get('/laravel', function () {
    return view('welcome');
});
Route::get('/master', 'App\Http\Controllers\dashController@index')->middleware('auth');
Route::get('/dasbor', 'App\Http\Controllers\dboardController@index')->middleware('auth');
Route::get('/produk', 'App\Http\Controllers\prodController@index')->middleware('auth');
Route::get('/role', 'App\Http\Controllers\roleController@index')->middleware('auth');
Route::get('/nasabah', 'App\Http\Controllers\nasController@index')->middleware('auth');
Route::post('/master/createUser', 'App\Http\Controllers\dashController@createUser')->middleware('auth');
Route::get('/master/{id}/userEdit', 'App\Http\Controllers\dashController@editUser')->middleware('auth');
Route::post('/master/{id}/userEdit', 'App\Http\Controllers\dashController@update')->middleware('auth');
Route::get('/master/{id}/userDelete', 'App\Http\Controllers\dashController@delete')->middleware('auth');
Route::post('/nasabah/createNasabah', 'App\Http\Controllers\nasController@createNasabah')->middleware('auth');
Route::get('/nasabah/{id}/nasabahEdit', 'App\Http\Controllers\nasController@editNasabah')->middleware('auth');
Route::post('/nasabah/{id}/nasabahEdit', 'App\Http\Controllers\nasController@updateNasabah')->middleware('auth');
Route::get('/nasabah/{id}/nasabahDelete', 'App\Http\Controllers\nasController@deleteNasabah')->middleware('auth');
Route::post('/produk/createProduk', 'App\Http\Controllers\prodController@createProduk')->middleware('auth');
Route::get('/produk/{id}/produkEdit', 'App\Http\Controllers\prodController@editProduk')->middleware('auth');
Route::post('/produk/{id}/produkEdit', 'App\Http\Controllers\prodController@updateProduk')->middleware('auth');
Route::get('/produk/{id}/produkDelete', 'App\Http\Controllers\prodController@deleteProduk')->middleware('auth');
Route::post('/role/createRole', 'App\Http\Controllers\roleController@createRole')->middleware('auth');
Route::get('/role/{id}/roleEdit', 'App\Http\Controllers\roleController@editRole')->middleware('auth');
Route::post('/role/{id}/roleEdit', 'App\Http\Controllers\roleController@updateRole')->middleware('auth');
Route::get('/', function () {
    return view('wilkommen');
});
Route::get('/login', '\App\Http\Controllers\authController@login')->name('login');
Route::post('/postlogin', '\App\Http\Controllers\authController@postlogin');
Route::get('/logout', '\App\Http\Controllers\authController@logout')->middleware('auth');
