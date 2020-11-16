@extends('template.base')

@section('content')
	<div class="row">
		<div class="col-md-12 mt-5 bg-success">
			<div class="card">
				<div class="card-header">
					Tambah Data Produk<hr>
				</div>

				<div class="card-body">
					<form action="{{url('produk-admin')}}" method="post">
						@csrf
					<div class="form-group">
						<label class="control-label">Nama</label>
						<input type="text" class="form-control" name='nama'></input>
					</div>
					<div class="row no-gutters">
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">Harga</label>
								<input type="text" class="form-control" name='harga'></input>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label class="control-label">Berat</label>
								<input type="text" class="form-control" name='berat'></input>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label class="control-label">Stok</label>
								<input type="text" class="form-control" name='stok'></input>
							</div>
						</div>
					</div>
			
					<div class="form-group">
						<label class="control-label">Deskripsi</label>
						<textarea name="deskripsi" class="form-control"></textarea>
					</div>
					<button class="btn btn-warning"><i class="fa fa-save">Simpan</i></button>						
					</form>
				</div>
			</div> 
		</div>
	</div>


@endsection