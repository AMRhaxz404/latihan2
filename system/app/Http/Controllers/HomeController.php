<?php 

namespace App\Http\Controllers;

use App\Models\Produk;
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
		$list_bike = collect($list_bike);
		$list_produk = Produk::all();

		// Sorting
		// Sort by harga terendah
		// dd($list_produk->sortBy('harga'));
		// Sort by harga tertinggi
		// dd($list_produk->sortByDesc('harga')); 
		// $data['list'] = $list_produk;
		// return view ('test-collection', $data);

		// Take
		// ($list->sortByDesc ('harga')->take (5) as $item)

		// Skip
		// @foreach($list->sortByDesc ('harga')->skip(2)->take (5) as $ite


		// Map
		// $map = $list_produk->map(function($item){
		// 	// return $item->nama;
		// 	$result['nama'] = $item->nama;
		// 	$result['harga'] = $item->harga;
		// 	return $result;
		// });

		// Each
		// $list_produk->each(function($item){
		// 	echo "$item->nama<br>";
		// });

		// filter
		// $filtered = $list_produk->filter(function($item){
		// 	return$item->harga > 200000;
		// });

		// dd($filtered);
		// dd($map);
		// dd($list_bike, $collection, $list_produk);


		// Sum, max, min, average
		// $sum = $list_produk->max('harga');
		// dd($sum);

		$data['list'] = produk::simplePaginate(15);
		return view ('test-collection', $data);

		dd($list_produk);
	}
}