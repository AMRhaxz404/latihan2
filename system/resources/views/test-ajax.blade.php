@extends('template.baseclient')

@section('content')
<div class="container mt-5">	
	Jasa Pengiriman: <br>
	<div class="col-md-12 bg-danger">
		<div class="card ">
			<div class="card-header">
				<div class="form-check disabled">
				  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
				  <label class="form-check-label" for="exampleRadios3">
				    Silahkan Pilih Ekspedisi
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
				  <label class="form-check-label" for="exampleRadios1">
				    JNE
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
				  <label class="form-check-label" for="exampleRadios2">
				    J&T Express
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
				  <label class="form-check-label" for="exampleRadios1">
				    ID Express
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
				  <label class="form-check-label" for="exampleRadios2">
				    POS Indonesia
				  </label>
				</div>
				  <div class="form-check">
				  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
				  <label class="form-check-label" for="exampleRadios1">
				    SI CEPAT
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
				  <label class="form-check-label" for="exampleRadios2">
				    NINJA Express
				  </label>
				</div>
			</div>
		</div>
	</div>
		<div class="row">
			<div class="col-md-12">
				<div class="card-header">
					Alamat :
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-3">
							<label class="control-label">Provinsi</label>
							<select name="" class="form-control" onchange="gantiProvinsi(this.value)">
								@foreach($list_provinsi as $provinsi)
									<option value="">Pilih Provinsi !</option>
									<option value="{{$provinsi->id}}">{{$provinsi->name}}</option>
								@endforeach
							</select>
						</div>
						<div class="col-md-3">
							<label class="control-label">Kabupaten/Kota</label>
							<select name="" class="form-control" onchange="gantiKabupaten(this.value)">
								<option value="">Pilih Provinsi Terlebih Dahulu !</option>
							</select>
						</div>
						<div class="col-md-3">
							<label class="control-label">Kecamatan</label>
							<select name="" class="form-control" id="kecamatan" onchange="gantiKecamatan(this.value)">
								<option value="">Pilih Kabupaten Terlebih Dahulu !</option>
							</select>
						</div>
						<div class="col-md-3">
							<label class="control-label">Desa</label>
							<select name="" class="form-control" id="desa">
								<option value="">Pilih Kecamatan Terlebih Dahulu !</option>
							</select>
						</div>
					</div>
				</div>
			</div>
		</div>

<div class="col-md-12 bg-danger mb-5">
		<div class="card ">
			<div class="card-header">
				<button> Pesan Sekarang </button>
			</div>
		</div>
</div>

</div>
@endsection    

@push('script')
<script>
    function gantiProvinsi(id) {
        $.get("api/provinsi/" +id, function(result) {
            result = JSON.parse(result);
            option = ""
            for (item of result) {
                option += `<option value="${item.id}">${item.name}</option>`;
            }
            $("#Kabupaten").html(option)
        });
    }
    function gantiKabupaten(id) {
        $.get("api/kabupaten/" +id, function(result) {
            result = JSON.parse(result)
            option = ""
            for (item of result) {
                option += `<option value="${item.id}">${item.name}</option>`;
            }
            $("#kecamatan").html(option)
        });
    }
    function gantiKecamatan(id) {
        $.get("api/kecamatan/" +id, function(result) {
            result = JSON.parse(result)
            option = ""
            for (item of result) {
                option += `<option value="${item.id}">${item.name}</option>`;
            }
            $("#desa").html(option)
        });
    }
</script>
@endpush
