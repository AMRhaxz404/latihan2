<?php 

namespace App\Http\Controllers;

class HomeController extends Controller{


	function showMain(){
		return view ('main');
	}

	function showCheckout(){
		return view('checkout');
	}

	function showProduct(){
		return view('product');
	}

	function showStore(){
		return view('store');
	}
		
	function showLogin(){
		return view('login');
	}

	function showDetailproduk(){
		return view('detail-produk');
	}

	function showPromo(){
		return view('promo');
	}

	function showPelanggan(){
		return view('pelanggan');
	}

	function showSupplier(){
		return view('supplier');
	}

	function showForm(){
		return view('form');
	}

	function showAdmin(){
		return view('admin');
	}

	function showTable(){
		return view('table');
	}

	function showTabpanel(){
		return view('tab-panel');
	}

	function showProdukadmin(){
		return view('produk-admin');
	}

	function showLoginadmin(){
		return view('login-admin');
	}

	function showRegistrasi(){
		return view('registrasi');
	}

	function showKategori(){
		return view('kategori');
	}
}