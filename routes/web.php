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

Route::get('/', function () {
    echo "Selamat Datang";
});

//Menampilkan About
Route::get('/about', function () {
    return 'Nama :Sarindah Karina Br Sitepu  NIM :2031710042';
});

Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel = '.$id;
});
