@extends('template.base')

@section('content')
	<div class="row">
		<div class="col-md-12 mt-5 bg-success">
			<div class="card">
				<div class="card-header">
					Edit Data User<hr>
				</div>

				<div class="card-body">
						<form action="{{url('admin/user', $user->id)}}" method="post">
							@csrf
							@method ("put")
						<div class="form-group">
							<label class="control-label">Nama</label>
							<input type="text" class="form-control" name='nama' value="{{$user->nama}}"></input>
						</div>
						<div class="form-group">
							<label class="control-label">Username</label>
							<input type="text" class="form-control" name='username' value="{{$user->username}}"></input>
						</div>
						<div class="form-group">
							<label class="control-label">Email</label>
							<input type="email" class="form-control" name='email' value="{{$user->email}}"></input>
						</div>
						<div class="form-group">
							<label class="control-label">Password</label>
							<input type="password" class="form-control" name='password'></input>
						</div>
						<div class="form-group">
							<label class="control-label">No HP</label>
							<input type="no_handphone" class="form-control" name='no_handphone'></input>
						</div>
						<button class="btn btn-warning"><i class="fa fa-save">Simpan</i></button>		
					</form>
				</div>
			</div> 
		</div>
	</div>


@endsection