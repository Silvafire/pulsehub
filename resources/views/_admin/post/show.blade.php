@extends('layout.admin')

@section('content')
<div class="container-fluid">

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			Informação do Post
		</div>
		<div class="card-body">

            <div><strong>Imagem do Post:<br></strong><br><img height='100' alt="Imagem" src="{{asset('storage/post_imagens/' .$post->imagem)}}"></div>
			<br>
            <div><strong>Titulo: </strong>{{$post->titulo}}</div>
			<div><strong>Descrição: </strong>{{$post->descricao}}</div>
			<div><strong>Informação: </strong>{{$post->informacao}}</div>

	</div>
</div>
@endsection
