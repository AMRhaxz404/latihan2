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
					Data User
					<div id="button">
				        <a class="button" href="{{url('admin/user/create')}}"><i class="fa fa-plus"></i>Tambah Data</a>
				    </div>
    			</div>
				<div class="card-body">
					<table class="table">
						<thead>
							<th>No</th>
							<th>Aksi</th>
							<th>Username</th>
							<th>Nama</th>
							<th>Email</th>
						</thead>
						<tbody>
							@foreach($list_user as $user)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td>
									<div class=" btn btn-group">
										<a href="{{url('admin/user', $user->id)}}" class="btn btn-success"><i class="fa fa-info"></i></a>
										<a href="{{url('admin/user', $user->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
										@include('template.utils.delete', ['url' => url('admin/user', $user->id)])
									</div>
								</td>
								<td>{{$user->username}}</td>
								<td>{{$user->nama}}</td>
								<td>{{$user->email}}</td>	
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

@endsection