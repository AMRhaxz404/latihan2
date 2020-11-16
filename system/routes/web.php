<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ClientProdukController;

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

// wilayah client
// Route::get('main', [ClientProdukController:: class, 'showIndex']);

Route::get('checkout', [HomeController::class, 'showCheckout']);
Route::get('product', [HomeController::class, 'showProduct']);
Route::get('store', [HomeController::class, 'showStore']);
Route::get('login', [AuthController::class, 'showLogin']);
Route::get('detail-produk', [HomeController::class, 'showDetailproduk']);
Route::get('form', [HomeController::class, 'showForm']);

Route::get('product', [ClientProdukController::class, 'showMain']);
Route::get('produk-client/{product}', [ClientProdukController::class, 'show']);

Route::get('main', [ClientProdukController:: class, 'showMainIndex']);
Route::get('detail-produk', [ClientProdukController::class, 'showDetail']);




// wilayah admin
Route::get('admin', [HomeController::class, 'showAdmin']);

Route::get('login-admin', [AuthController::class, 'showLoginadmin']);
Route::get('registrasi', [HomeController::class, 'showRegistrasi']);
Route::get('kategori', [HomeController::class, 'showKategori']);
Route::get('promo', [HomeController::class, 'showPromo']);
Route::get('pelanggan', [HomeController::class, 'showPelanggan']);
Route::get('supplier', [HomeController::class, 'showSupplier']);
// Route::get('table', [HomeController::class, 'showTable']);
// Route::get('tab-panel', [HomeController::class, 'showTabpanel']);

Route::get('produk-admin', [ProdukController::class, 'index']);
Route::get('produk/create', [ProdukController::class, 'create']);
Route::post('produk-admin', [ProdukController::class, 'store']);
Route::get('produk/{produk}', [ProdukController::class, 'show']);
Route::get('produk/{produk}/edit', [ProdukController::class, 'edit']);
Route::put('produk/{produk}', [ProdukController::class, 'update']);
Route::delete('produk/{produk}', [ProdukController::class, 'destroy']);

