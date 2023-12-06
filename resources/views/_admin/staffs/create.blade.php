@extends('layout.admin')

@section('content')
<div class="container-fluid">

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			Novo Staff
		</div>
		<div class="card-body">

			<form method="POST" action="{{ route('admin.staffs.store') }}" class="form-group" enctype="multipart/form-data">
				@csrf
				@include('_admin.staffs.partials.add-edit')
				<div class="form-group">
					<button type="submit" class="btn btn-success" name="ok">Save</button>
					<a href="{{ route('admin.staffs.index') }}" class="btn btndefault">Cancel</a>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection