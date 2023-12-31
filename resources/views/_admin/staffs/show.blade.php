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
			<div><strong>Especialização:</strong>{{$staff->especializacao}}</div>
			<div><strong>Email:</strong>{{$staff->link_email}}</div>
            <div><strong>Modalidades:</strong>
                <ul>
                @foreach ($staff->modalidades as $modalidade)
                 <li>{{$modalidade->nome}}</li>
                @endforeach
            </ul>
            </div>
			<div>
			<strong>Imagem de Perfil:</strong>
				<img height='100' alt="Imagem" src="{{asset('storage/staff_imagens/' .
				$staff->img)}}">
			</div>

		</div>
	</div>
</div>
@endsection
