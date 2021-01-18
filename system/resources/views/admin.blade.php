@extends('template.base')

@section('content')

<div class="container">
	<div class="card mt-5 mb-5 bg">
		<div class="card-header">
			<center><h2>ADMIN</h2>
							@if(Auth::check())
                            {{request()->user()->nama}}
                            @elseif(Auth::guard('penjual')->check())
                            <center><i class="fa fa-info"></i> {{Auth::guard('penjual')->user()->nama}}<br>Penjual</center>
                            @elseif(Auth::guard('pembeli')->check())
                            <center><i class="fa fa-info"></i> {{Auth::guard('pembeli')->user()->nama}}<br>Pembeli</center>
                            @else
                            
                            <a href="{{url('logout')}}">Silahkan Login</a>
                            
                            @endif

			</center>

		
			<div class="row">
			<div class="col-md-12 mt-5 bg-danger">
				<div class="card">
					<div class="card-header">						
						Data Penjual
						<div class="pull-right">
						<div id="button">
					        <a class="button" href="{{url('admin/produk-admin/create')}}"><i class="fa fa-plus"></i>Tambah Produk</a>
					    </div>
					    </div>
	    			</div>
					<div class="card-body">
						<table class="table">
							<thead>
								<th>No</th>
								<th>Aksi</th>
								<th>Username</th>
								<th>Nama</th>
								<th>Jenis Kelamin</th>
								<th>Email</th>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>
										<div class=" btn btn-group">
											<a href="{{url('admin/user')}}" class="btn btn-success"><i class="fa fa-info"></i></a>
											<a href="{{url('admin/user')}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
											<a href="{{url('admin/user')}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
										</div>
									</td>
									<td>amrin</td>
									<td>Muhammad Amrin Mukhodas</td>
									<td>Laki-Laki</td>
									<td>amrin@gmail.com</td>

								</tr>

							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>




		</div>
	</div>
</div>

@endsection