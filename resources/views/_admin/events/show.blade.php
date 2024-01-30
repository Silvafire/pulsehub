@extends('layout.admin')

@section('content')
<div class="container-fluid">

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			Informação do Evento
		</div>
		<div class="card-body">

			<div class="col-md-3 mb-3">
				<strong>Imagem:</strong>
				<img class="img-fluid" src="{{ asset('storage/eventos_imagens/' . $event->img) }}"
					alt="Imagem da modalidade">
			</div>
			<div><strong>Nome:</strong>{{$event->nome}}</div>
			<div><strong>descrição:</strong>{{$event->descricao}}</div>
			<div><strong>tipo de evento:</strong>{{$event->tipo->nome}}</div>
			<div><strong>tipo de evento:</strong>{{$event->data}}</div>

		</div>
	</div>
</div>
@endsection