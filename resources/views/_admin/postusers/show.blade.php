@extends('layout.admin')

@section('content')
<div class="container-fluid">

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			Informação do Post Users
		</div>
		<div class="card-body">

			<div><strong>ID:</strong>{{$postusers->post_users_id}}</div>

		</div>
	</div>
</div>
@endsection
