
@extends('layout.admin')

@section('content')
<div class="container-fluid">

     <div class="card shadow mb-4">
        <div class="card-header py-3">
			Informação do Utilizador
        </div>
        <div class="card-body">

			<div>
				<img alt="Foto" src="{{asset('storage/users_fotos/'. $user->img )}}" height="80">
			</div>

			<div><strong>Nome:</strong>{{$user->name}}</div>
			<div><strong>E-mail:</strong>{{$user->email}}</div>
            <div><strong>Role:</strong>{{$user->roleToStr()}}</div>
		</div>
	</div>
</div>
@endsection
