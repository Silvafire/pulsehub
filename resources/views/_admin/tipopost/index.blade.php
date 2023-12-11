@extends ("layout.admin")


@section("content")
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Tipo de Post</h1>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <a class="btn btn-primary" href="{{route('admin.tipopost.create')}}">
        <i class="fas fa-plus"></i> Novo Tipo de Post
      </a>
    </div>
    <div class="card-body">
      @if (count($tipopost))
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Nome</th>
              <th>Editar</th>
            </tr>
          </thead>
          <tbody>
            @foreach($tipoposts as $tipopost)
            <tr>
              <td>{{$tipopost->nome}}</td>
              <td nowrap>
                <a class="btn btn-xs btn-primary btn-p" href="{{route('admin.tipopost.show',$plano)}}"><i class="fas fa-eye fa-xs"></i></a>
                <a class="btn btn-xs btn-warning btn-p" href="{{route('admin.tipopost.edit',$plano)}}"><i class="fas fa-pen fa-xs"></i></a>
                <form method="POST" action="{{route('admin.tipopost.destroy',$tipopost)}}" role="form" class="inline" onsubmit="return confirm('Confirma que pretende eliminar este tipo de post?');">
                  @csrf
                  @method("DELETE")
                  <button type="submit" class="btn btn-xs btn-danger btn-p">
                    <i class="fas fa-trash fa-xs"></i></button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      @else
      <h6>Não existem tipo post registados</h6>
      @endif
    </div>
  </div>
</div>
@endsection

@section("scripts")

<script>
  $('#dataTable').dataTable({
    destroy: true,
    "order": [
      [1, 'asc']
    ],
    "columns": [
      null,
      null,
      {
        "orderable": false
      }
    ]
  });
</script>
@endsection
