@extends('layout.admin')

@section('content')
<div class="container-fluid">

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			Informação do Post
		</div>
		<div class="card-body">

			<div><strong>Imagem:</strong>{{$plano->imagem}}</div>
			<div><strong>Titulo:</strong>{{$plano->titulo}}</div>
			<div><strong>Descricao:</strong>{{$plano->descricao}}</div>
			<div><strong>Informacao:</strong>{{$plano->informacao}}</div>


		</div>
	</div>
</div>
@endsection
