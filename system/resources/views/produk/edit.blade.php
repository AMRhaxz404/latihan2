@extends('template.base')

@section('content')
	<div class="row">
		<div class="col-md-12 mt-5 bg-success">
			<div class="card">
				<div class="card-header">
					Tambah Data Produk<hr>
				</div>

				<div class="card-body">
					<form action="{{url('admin/produk-admin', $produk->id)}}" method="post">
						@csrf
						@method("PUT")
					<div class="form-group">
						<label class="control-label">Nama</label>
						<input type="text" class="form-control" name='nama' value="{{$produk->nama}}"></input>
					</div>
					<div class="row no-gutters">
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">Harga</label>
								<input type="text" class="form-control" name='harga' value="{{$produk->harga}}"></input>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label class="control-label">Berat</label>
								<input type="text" class="form-control" name='berat' value="{{$produk->berat}}"></input>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label class="control-label">Stok</label>
								<input type="text" class="form-control" name='stok' value="{{$produk->stok}}"></input>
							</div>
						</div>
					</div>
			
					<div class="form-group">
						<label class="control-label">Deskripsi</label>
						<textarea name="deskripsi" class="form-control">{{$produk->deskripsi}}</textarea>
					</div>
					<button class="btn btn-warning"><i class="fa fa-save">Simpan</i></button>						
					</form>
				</div>
			</div> 
		</div>
	</div>


@endsection