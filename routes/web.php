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
use App\Http\Controllers\illerController;

Route::resource('iller', illerController::class);


use App\Http\Controllers\okullarController;

Route::resource('okullar', okullarController::class);



use App\Http\Controllers\cinsiyetController;

Route::resource('cinsiyet', cinsiyetController::class);


use App\Http\Controllers\mesleklerController;

Route::resource('meslekler', mesleklerController::class);


use App\Http\Controllers\gruplarController;

Route::resource('gruplar', gruplarController::class);


Route::get('/', function () {
    return view('welcome');
});
Route::get('/kitap', function () {
    return view('kitap');
});
Route::get('/yayinevi', function () {
    return view('yayinevi');
});
Route::get('/iletisim', function () {
    return view('iletisim');
});
Route::get('/kisilistesi', function () {
    return view('kisilistesi');
});
Route::get('/kisiekle', function () {
    return view('kisiekle');
});
Route::get('/kisibul', function () {
    return view('kisibul');
});

Route::get('/takvim', function () {
    return view('takvim');
});
Route::get('/rehberhakkinda', function () {
    return view('rehberhakkinda');
});
Route::get('/faydalibilgiler', function () {
    return view('faydalibilgiler');
});
Route::get('/tanitim', function () {
    return view('tanitim');
});
Route::get('/takvim', function () {
    return view('takvim');
});
