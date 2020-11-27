@extends('template.base')
s
@section('content')
	<div class="row">
		<div class="col-md-12 mt-5 bg-success">
			<div class="card">
				<div class="card-header">
					<h2>Detail Data Kategori</h2><hr>
				</div>

				<div class="card-body">
					<h3>{{$kategori->nama}}</h3>
					<hr>
					<p>
						Nama : {{$kategori->nama}} |
						Jumlah Barang : {{$kategori->jumlah_barang}}
					</p>
				</div>
			</div> 
		</div>
	</div>


@endsection