@extends('layout.admin')

@section('content')
<div class="container-fluid">

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			Informação do Serviço
		</div>
		
		<div class="card-body">

			<div><strong>Nome:</strong>{{$service->nome}}</div>
			<div><strong>Descrição:</strong>{{$service->descricao}}</div>
			<div><strong>Imagens:</strong>
			@foreach($service->images as $image)
				<img src="{{asset('storage/image_services/'. $image->imagem)}}" class="img-post" alt="">
			@endforeach
			</div>
		
		</div>
	</div>
</div>
@endsection