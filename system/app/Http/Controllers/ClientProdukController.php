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

}