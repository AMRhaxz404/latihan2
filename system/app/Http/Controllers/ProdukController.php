<?php 

namespace App\Http\Controllers;
use App\Models\Produk;

class ProdukController extends Controller{
	function index(){
		$user = request()->user();
		$data['list_produk'] = $user->produk;
		return  view ('produk.index', $data);
	}
	function create(){
		return  view ('produk.create');
	}
	function store(){
		$produkAdmin = new Produk;
		$produkAdmin->id_user = request()->user()->id;
		$produkAdmin->nama = request('nama');
		$produkAdmin->stok = request('stok');
		$produkAdmin->harga = request('harga');
		$produkAdmin->berat = request('berat');
		$produkAdmin->deskripsi = request('deskripsi');
		$produkAdmin->save();

		$produkAdmin->handleUploadFoto();

		return redirect ('admin/produk-admin')->with('success', 'Data Berhasil Ditambahkan');

	}

	function show(Produk $produkAdmin){

		$data['produk'] = $produkAdmin;
		return view('produk.show', $data);
	}
	function edit(Produk $produkAdmin){
		$data['produk'] = $produkAdmin;
		return view('produk.edit', $data);
	}
	function update(Produk $produkAdmin){
		$produkAdmin->nama = request('nama');
		$produkAdmin->stok = request('stok');
		$produkAdmin->harga = request('harga');
		$produkAdmin->berat = request('berat');
		$produkAdmin->deskripsi = request('deskripsi');
		$produkAdmin->save();

		$produkAdmin->handleUploadFoto();

		return redirect ('admin/produk-admin')->with('success', 'Data Berhasil Diedit');
	}
	function destroy(Produk $produkAdmin){

		$produkAdmin->handleDelete();
		$produkAdmin->delete();

		return redirect ('admin/produk-admin')->with('danger', 'Data Berhasil Dihapus');
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
		return  view ('produk.index', $data);
	}
}