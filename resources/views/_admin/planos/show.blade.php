@extends('layout.admin')

@section('content')
<div class="container-fluid">

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			Informação da Plano
		</div>
		<div class="card-body">

            <div><strong>Series:</strong>{{$plano->nome_exercicio}}</div>
			<div><strong>Series:</strong>{{$plano->series}}</div>
			<div><strong>Duracao_Total:</strong>{{$plano->duracao_total}}</div>
			<div><strong>Tmp_Exercicio:</strong>{{$plano->tmp_exercicio}}</div>
			<div><strong>Repeticoes:</strong>{{$plano->repeticoes}}</div>


		</div>
	</div>
</div>
@endsection
