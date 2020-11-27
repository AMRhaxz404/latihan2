@extends('template.base')

@section('content')
	<div class="row">
		<div class="col-md-12 mt-5 bg-success">
			<div class="card">
				<div class="card-header">
					<h2>Tambah Data Kategori</h2><hr>	
				</div>

				<div class="card-body">
					<form action="{{url('admin/kategori')}}" method="post">
						@csrf
					<div class="form-group">
						<label class="control-label">Nama</label>
						<input type="text" class="form-control" name='nama'></input>
					</div>
					<button class="btn btn-warning"><i class="fa fa-save">Simpan</i></button>						
					</form>
				</div>
			</div> 
		</div>
	</div>


@endsection