@extends('layout.admin')

@section('content')

<div class="container-fluid">

     <div class="card shadow mb-4">
        <div class="card-header py-3">
			Editar Post
        </div>
        <div class="card-body">

			<form method="POST" action="#" class="form-group">
				@include('_admin.postusers.partials.add-edit')
				<div class="form-group">
					<button type="submit" class="btn btn-success" name="ok">Guardar</button>

					<a href="#" class="btn btn-default">Cancelar</a>

				</div>

			</form>

		</div>
	</div>
</div>


@endsection
