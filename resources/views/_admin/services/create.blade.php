@extends('layout.admin')

@section('content')
<div class="container-fluid">

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			Novo Serviço
		</div>
		<div class="card-body">

			<form method="POST" action="{{ route('admin.services.store') }}" class="form-group" enctype="multipart/form-data">
				@csrf
				@include('_admin.services.partials.add-edit')
				<div class="form-group">
					<button type="submit" class="btn btn-success" name="ok">Salvar</button>
					<a href="{{ route('admin.services.index') }}" class="btn btndefault">Cancelar</a>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection