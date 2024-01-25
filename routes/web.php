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
    return view('user.dashboard');
});
Route::get('/daftar', function () {
    return view('user.daftar');
});
Route::get('/loket', function () {
    return view('user.loket');
});
Route::get('/loket1', function () {
    return view('user.loket1');
});
Route::get('/data', function () {
    return view('user.data');
});
Route::get('/hlmantrian', function () {
    return view('user.hlmantrian');
});
Route::get('/Login', function () {
    return view('Admin.Login');
});
Route::get('/instansi', function () {
    return view('Admin.instansi');
});
Route::get('/tambahantrian', function () {
    return view('Admin.tambahantrian');
});
Route::get('/panggil', function () {
    return view('Admin.panggil');
});
Route::get('/tambahloket', function () {
    return view('Admin.tambahloket');
});
Route::get('/tambahloket1', function () {
    return view('Admin.tambahloket1');
});
Route::get('/total', function () {
    return view('Admin.total');
});

