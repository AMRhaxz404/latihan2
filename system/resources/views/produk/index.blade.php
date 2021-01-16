@inject('timeServices', 'App\Services\TimeServices')

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
					<div class="pull-right">
						Jam : {{$timeServices->showTimeNow()}}
					</div>
					Filter

				</div>
				<div class="card-body">
					<form action="{{url('admin/produk-admin/filter')}}" method="post">
						@csrf
						<div class="form-group">
							<label for="" class="control-label">Nama</label>
							<input type="text" class="form-control" name="nama" value="{{$nama ?? ""}}">
						</div>
						<div class="form-group">
							<label for="" class="control-label">Stok</label>
							<input type="text" class="form-control" name="stok" value="{{$stok ?? ""}}">
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="" class="control-label">Harga Min</label>
									<input type="text" class="form-control" name="harga_min" value="{{$harga_min ?? ""}}">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="" class="control-label">Harga Max</label>
									<input type="text" class="form-control" name="harga_max" value="{{$harga_max ?? ""}}">
								</div>
							</div>
						</div>
						<div id="button">
							<button class="btn btn-primmary"><i class="fa fa-search"></i>Filter</button>
				    	</div>
					</form>
				</div>
			</div><br>
			<div class="card">
				<div class="card-header">
					Data Produk
					<div id="button">
				        <a class="button" href="{{url('admin/produk-admin/create')}}"><i class="fa fa-plus"></i>Tambah Data</a>
				    </div>
    			</div>
				<div class="card-body">
					<table class="table table-datatable">
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