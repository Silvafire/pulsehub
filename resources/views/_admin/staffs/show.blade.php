@extends('layout.admin')

@section('content')
<div class="container-fluid">

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			Informação do Satff
		</div>
		<div class="card-body">

			<div><strong>Nome:</strong>{{$staff->nome}}</div>
			<div><strong>Apelido:</strong>{{$staff->apelido}}</div>
			<div>
				<img alt="Imagem" src="{{asset('storage/staff_imagens/' .
				$staff->imagem)}}">
			</div>

		</div>
	</div>
</div>
@endsection
