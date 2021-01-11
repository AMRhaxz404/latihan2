<?php 

namespace App\Http\Controllers;
use Config;
use App;

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


	function test($produk, $hargaMin = 0, $hargaMax = 0){
		if ($produk == 'payung') {
			echo "Tampilkan Produk Payung";
		}elseif ($produk == 'sepeda') {
			echo "Tampilkan Produk Sepeda";
		}
		echo "<br>";
		echo "Harga Min Adalah $hargaMin <br>"; 
		echo "Harga Max Adalah $hargaMax <br>"; 
	}

	public function testCollection(){

		$list_bike = ['Honda', 'Yamaha', 'Kawasaki', 'Suzuki', 'Vespa', 'BMW', 'KTM'];
		$collection = collect($list_bike);

		dd($collection->count());
		dd($list_bike, $collection);
	}
}