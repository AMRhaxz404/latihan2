<?php 

namespace App\Http\Controllers;
use App\Models\Kategori;


class KategoriController extends Controller{
	function index(){
		$user = request()->user();
		$data['list_produk'] = $user->produk;
		return  view ('kategori.index', $data);
	}
	function create(){
		return  view ('kategori.create');
	}
	function store(){
		$kategori = new Kategori;
		$kategori->id_produk = request()->user()->id;
		$kategori->nama = request('nama');
		$kategori->save();

		return redirect ('admin/kategori')->with('success', 'Data Berhasil Ditambahkan');

	}

	function show(Kategori $kategoriAdmin){

		$data['kategori'] = $kategoriAdmin;
		return view('kategori.show', $data);
	}
	function edit(Produk $produkAdmin){
		$data['produk'] = $produkAdmin;
		return view('produk.edit', $data);
	}
	function update(Produk $produk){
		$produk->nama = request('nama');
		$produk->stok = request('stok');
		$produk->harga = request('harga');
		$produk->berat = request('berat');
		$produk->deskripsi = request('deskripsi');
		$produk->save();

		return redirect ('produk-admin')->with('success', 'Data Berhasil Diedit');
	}
	function destroy(Produk $produk){
		$produk->delete();

		return redirect ('produk-admin')->with('danger', 'Data Berhasil Dihapus');
	}
}