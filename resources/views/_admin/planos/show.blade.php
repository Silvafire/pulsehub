@extends('layout.admin')

@section('content')
<div class="container-fluid">

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			Informação da Plano
		</div>
		<div class="card-body">

			<div><strong>Nome:</strong>{{$plano->nome}}</div>
			<div><strong>Descrição:</strong>{{$plano->descricao}}</div>
		</div>
	</div>
</div>
@endsection
