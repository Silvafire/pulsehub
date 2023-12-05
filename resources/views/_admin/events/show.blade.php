@extends('layout.admin')

@section('content')
<div class="container-fluid">

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			Informação do Evento
		</div>
		<div class="card-body">

			<div><strong>Nome:</strong>{{$event->nome}}</div>
			<div><strong>descrição:</strong>{{$event->descricao}}</div>
			<div><strong>imagem:</strong>{{$event->img}}</div>
			<div><strong>tipo de evento:</strong>{{$event->tipo}}</div>

		</div>
	</div>
</div>
@endsection