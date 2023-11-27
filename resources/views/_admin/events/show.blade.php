@extends('layout.admin')

@section('content')
<div class="container-fluid">

     <div class="card shadow mb-4">
        <div class="card-header py-3">
			Informação da Categoria
        </div>
        <div class="card-body">

			<div><strong>Nome:</strong>{{$category->name}}</div>
		</div>
	</div>
</div>
@endsection
