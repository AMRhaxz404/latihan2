@extends('template.base')

@section('content')
	<div class="row">
		<div class="col-md-12 mt-5 bg-success">
			<div class="card">
				<div class="card-header">
					Tambah Data Produk<hr>
				</div>

				<div class="card-body">
					<form action="{{url('admin/produk-admin')}}" method="post" enctype="multipart/form-data">
						@csrf
					<div class="form-group">
						<label class="control-label">Nama</label>
						<input type="text" class="form-control" name='nama'></input>
					</div>
					<div class="row no-gutters">
						<div class="col-md-3">
							<div class="form-group">
								<label class="control-label">Foto</label>
								<input type="file" class="form-control" name='foto' accept=".png"></input>
							</div>
						</div>
						<div class="col-md-3">
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
			
					<div class="card-body">
					<div class="form-group">
						<label for="" class="control-label"> Deskripsi </label>
						<textarea name="deskripsi" id="deskripsi" class="form-control"></textarea>
					</div>
				</div>
					<button class="btn btn-warning"><i class="fa fa-save">Simpan</i></button>						
					</form>
				</div>
			</div> 
		</div>
	</div>
@endsection

@push('style')
	<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpush

@push('script')
	<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
	<script>
		$(document).ready(function() {
  		$('#deskripsi').summernote();
		});
	</script>
@endpush