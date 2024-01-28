@extends('layout.admin')

@section('content')
<div class="container-fluid">

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			Informação do Tipo Plano
		</div>
		<div class="card-body">

			<div><strong>Nome:</strong>{{$tiposplano->nome}}</div>
			<div><strong>Descrição:</strong>{{$tiposplano->descricao}}</div>
            <div><strong>Classe:</strong>{{$tiposplano->classe}}</div>
            <div><strong>Imagem: </strong><img height='80' src="{{asset('storage/tiposplanos_imagens/'. $tiposplano->imagem )}}" alt="Imagem do tipo do plano"></div>
		</div>
	</div>
</div>
@endsection
