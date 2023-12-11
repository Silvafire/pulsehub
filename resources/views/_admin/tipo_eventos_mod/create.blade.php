@extends('layout.admin')

@section('content')
<div class="container-fluid">

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			Novo tipo evento/modalidades
		</div>
		<div class="card-body">

			<form method="POST" action="{{ route('admin.tipo_eventos_mod.store') }}" class="form-group" enctype="multipart/form-data">
				@csrf
				@include('_admin.tipo_eventos_mod.partials.add-edit')
				<div class="form-group">
					<button type="submit" class="btn btn-success" name="ok">Save</button>
					<a href="{{ route('admin.tipo_eventos_mod.index') }}" class="btn btndefault">Cancel</a>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection
