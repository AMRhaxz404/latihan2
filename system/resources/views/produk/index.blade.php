@extends('template.base')

@section('content')

	<!-- CSS Button -->
	<style type="text/css">
		.button {
		  background-color: #34495e;
		  width: 100%;
		  padding: 5px 0 10px 0;
		  float: right;
		}
		#button a{
		  text-decoration: none;
		  color: #ecf0f1;
		  background-color: #16a085;
		  width: 100px;
		  padding: 5px 10px;
		  margin:5px;
		  border-radius: 5px;
		}
	</style>
	<!-- akhir css button -->

	<div class="row">
		<div class="col-md-12 mt-5 bg-primary">
			<div class="card">
				<div class="card-header">
					Data Produk
					<div id="button">
				        <a class="button" href="{{url('admin/produk-admin/create')}}"><i class="fa fa-plus"></i>Tambah Data</a>
				    </div>
    			</div>
				<div class="card-body">
					<table class="table">
						<thead>
							<th>No</th>
							<th>Aksi</th>
							<th>Nama</th>
							<th>Harga</th>
							<th>Stok</th>
						</thead>
						<tbody>
							@foreach($list_produk as $produk)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td>
									<div class=" btn btn-group">
										<a href="{{url('admin/produk-admin', $produk->id)}}" class="btn btn-success"><i class="fa fa-info"></i></a>
										<a href="{{url('admin/produk-admin', $produk->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
										@include('template.utils.delete', ['url' => url('admin/produk-admin', $produk->id)])
									</div>
								</td>
								<td>{{$produk->nama}}</td>
								<td>{{$produk->harga}}</td>
								<td>{{$produk->stok}}</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

@endsection