@extends('layout.admin')

@section('content')
<div class="container-fluid">

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			Informação da Modalidade
		</div>
		<div class="card-body">

			<div><strong>Nome:</strong>{{$modalidade->nome}}</div>
		</div>
	</div>
</div>
@endsection
