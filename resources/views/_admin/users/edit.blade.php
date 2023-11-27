@extends('layout.admin')

@section('content')

<div class="container-fluid">

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			Editar Utilizador
		</div>
		<div class="card-body">

			<form method="POST" action="#" class="form-group" enctype="multipart/form-data">
				@include('_admin.users.partials.add-edit')
				<div class="form-group">
					<button type="submit" class="btn btn-success" name="ok">Guardar</button>

					<a href="#" class="btn btn-default">Cancelar</a>

				</div>

			</form>

			<a href="#" class="btn btn-primary">Enviar email de ativação</a>
		</div>
	</div>
</div>


@endsection