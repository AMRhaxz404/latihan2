@extends('template.base')

@section('content')
	<div class="row">
		<div class="col-md-12 mt-5 bg-success">
			<div class="card">
				<div class="card-header">
					Detail Data User<hr>
				</div>

				<div class="card-body">
					<h3>{{$user->nama}}</h3>
					<hr>
					<p>
						{{"@".$user->username}} |
						Email : {{$user->email}}
					</p>
					
				</div>
			</div> 
		</div>
	</div>


@endsection