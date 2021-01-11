m
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ClientProdukController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KategoriController;

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

// regsitrasi
Route::get('login-admin', [AuthController::class, 'create']);
Route::post('login-admin', [AuthController::class, 'registration']);

Route::get('kategori', [HomeController::class, 'showKategori']);
Route::get('promo', [HomeController::class, 'showPromo']);
Route::get('pelanggan', [HomeController::class, 'showPelanggan']);
Route::get('supplier', [HomeController::class, 'showSupplier']);
// Route::get('table', [HomeController::class, 'showTable']);
// Route::get('tab-panel', [HomeController::class, 'showTabpanel']);

Route::prefix('admin')->middleware('auth')->group(function(){
	Route::post('produk-admin/filter', [ProdukController::class, 'filter']);
	// Produk
	Route::resource('produk-admin', ProdukController::class);
	// User
	Route::resource('user', UserController::class);
	// kategori
	Route::resource('kategori', KategoriController::class);
});




// admin process login
Route::get('login-admin', [AuthController::class, 'showLoginadmin'])->name('login');
Route::post('login-admin', [AuthController::class, 'loginadminProcess']);
Route::get('logout', [AuthController::class, 'logout']);

// test
Route::get('test-collection', [HomeController:: class, 'testCollection']);
