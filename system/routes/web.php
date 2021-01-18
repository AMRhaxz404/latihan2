<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientProdukController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\SettingController;

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
    return view('welcome ');
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
Route::get('category', [ClientProdukController::class, 'showCategory']);
Route::post('category/filter', [ClientProdukController::class, 'filter']);

// test
Route::get('test/{produk}/{hargaMin?}/{hargaMax?}', [HomeController:: class, 'test']);


// wilayah admin
Route::get('admin', [HomeController::class, 'showAdmin']);
Route::get('admin/{status}', [HomeController::class, 'showAdmin']);

// regsitrasi
Route::get('login-admin', [AuthController::class, 'create']);
Route::post('login-admin', [AuthController::class, 'registration']);

Route::get('kategori', [HomeController::class, 'showKategori']);
Route::get('promo', [HomeController::class, 'showPromo']);
Route::get('pelanggan', [HomeController::class, 'showPelanggan']);
Route::get('supplier', [HomeController::class, 'showSupplier']);
// Route::get('table', [HomeController::class, 'showTable']);
// Route::get('tab-panel', [HomeController::class, 'showTabpanel']);


Route::prefix('admin')->middleware('auth')->group(function () {
    Route::resource('produk-admin', ProdukController::class);
    Route::resource('product-admin', ProductController::class);
    Route::post('produk-admin/filter', [ProdukController::class, 'filter']);
    Route::resource('kategori', KategoriController::class);
    Route::resource('user', UserController::class);
    Route::resource('promo', PromoController::class);
});



// admin process login
Route::get('login-admin', [AuthController::class, 'showLoginadmin'])->name('login');
Route::post('login-admin', [AuthController::class, 'loginadminProcess']);
Route::get('logout', [AuthController::class, 'logout']);

// test
Route::get('test-collection', [HomeController:: class, 'testCollection']);

// wilayah - ajax
Route::get('test-ajax', [HomeController:: class, 'testAjax']);


// setting
Route::get('setting', [SettingController:: class, 'index']);
Route::post('setting', [SettingController:: class, 'store']);