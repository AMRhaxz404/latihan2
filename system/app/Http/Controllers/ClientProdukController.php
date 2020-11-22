<?php 

namespace App\Http\Controllers;
use App\Models\Produk;
use App\Models\Kategori;

class ClientProdukController extends Controller{

	function showMainIndex(){
		$data['list_produk'] = produk::all();
		$data['list_kategori'] = kategori::all();
		return  view ('main', $data);
	}

	function show(Produk $produk){
		$data['produk'] = $produk;
		return view('detail-produk', $data);
	}

	function showCategory(Produk $produk){
		$data['list_produk'] = produk::all();
		$data['list_kategori'] = kategori::all();
		return  view ('category', $data);
	}

	function filter(){
		$nama = request('nama');
		$stok = explode(",", request('stok'));
		$data['harga_min'] = $harga_min = request('harga_min');
		$data['harga_max'] = $harga_max = request('harga_max');
		// Positif
		$data['list_produk'] = Produk::where('nama', 'like', "%$nama%")->get();
		// $data['list_produk'] = Produk::whereIn('stok', $stok)->get();
		// $data['list_produk'] = Produk::whereBetween('harga', [$harga_min, $harga_max])->get();

		// Negatif
		// $data['list_produk'] = Produk::where('stok', '<>', $stok)->get();
		// $data['list_produk'] = Produk::whereNotIn('stok', $stok)->get();
		// $data['list_produk'] = Produk::whereNotBetween('harga', [$harga_min, $harga_max])->get();

		// null
		// $data['list_produk'] = Produk::whereNull('stok')->get();
		// $data['list_produk'] = Produk::whereNotNull('stok')->get();

		// created_at
		// $data['list_produk'] = Produk::whereDate('created_at', '2020-11-14')->get();
		// $data['list_produk'] = Produk::whereMonth('created_at', '11')->whereYear('created_at', '2020') get();
		// $data['list_produk'] = Produk::whereTime('created_at', '08:30:00')->get();

		// $data['list_produk'] = Produk::whereNotBetween('harga', [$harga_min, $harga_max])->whereYear('created_at', '2020') ->get();


		$data['nama'] = $nama;
		$data['stok'] = request('stok');
		return  view ('category', $data);
	}

}