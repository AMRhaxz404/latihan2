@extends('template.base')
s
@section('content')
	<div class="row">
		<div class="col-md-12 mt-5 bg-success">
			<div class="card">
				<div class="card-header">
					Detail Data Produk<hr>
				</div>

				<div class="card-body">
					<h3>{{$produk->nama}}</h3>
					<hr>
						@include ('produk.show.detail')
					<p>
						{!! nl2br($produk->deskripsi) !!}
					</p>

					<p>
						<img style="width:100%" src="{{url("public/$produk->foto")}}" >
					</p>
				</div>
			</div> 
		</div>
	</div>


@endsection