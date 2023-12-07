@extends('layout.admin')

@section('content')
<div class="container-fluid">

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			Informação do Tipo Post
		</div>
		<div class="card-body">

			<div><strong>Nome:</strong>{{$tipopost->nome}}</div>

		</div>
	</div>
</div>
@endsection
