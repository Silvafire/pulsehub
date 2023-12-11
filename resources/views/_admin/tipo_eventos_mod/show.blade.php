@extends('layout.admin')

@section('content')
<div class="container-fluid">

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			Informação do tipo evntos/modalidades
		</div>
		<div class="card-body">

			<div><strong>Nome:</strong>{{$tem->nome}}</div>
			<div><strong>imagem:</strong>{{$tem->imagem}}</div>

		</div>
	</div>
</div>
@endsection
