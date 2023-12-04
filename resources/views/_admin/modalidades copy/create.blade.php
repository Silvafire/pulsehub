@extends('layout.admin')

@section('content')
<div class="container-fluid">

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			Nova Modalidade
		</div>
		<div class="card-body">

			<form method="POST" action="{{ route('admin.modalidades.store') }}" class="form-group">
				@csrf
				@include('_admin.modalidades.partials.add-edit')
				<div class="form-group">
					<button type="submit" class="btn btn-success" name="ok">Salvar</button>
					<a href="{{ route('admin.modalidades.index') }}" class="btn btndefault">Cancelar</a>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection
