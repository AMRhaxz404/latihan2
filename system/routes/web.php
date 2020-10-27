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
    return view('main');
});

Route::get('/main', function () {
    return view('main');
});

Route::get('/blank', function () {
    return view('blank');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/store', function () {
    return view('store');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/detail-produk', function () {
    return view('detail-produk');
});

Route::get('/promo', function () {
    return view('promo');
});

Route::get('/pelanggan', function () {
    return view('pelanggan');
});

Route::get('/supplier', function () {
    return view('supplier');
});


Route::get('/form', function () {
    return view('form');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/table', function () {
    return view('table');
});

Route::get('/tab-panel', function () {
    return view('tab-panel');
});

Route::get('/produk-admin', function () {
    return view('produk-admin');
});

Route::get('/login-admin', function () {
    return view('login-admin');
});

Route::get('/registrasi', function () {
    return view('registrasi');
});

Route::get('/kategori', function () {
    return view('kategori');
});