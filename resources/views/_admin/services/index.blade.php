@extends ("layout.admin")


@section("content")
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Servicos</h1>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <a class="btn btn-primary" href="{{route('admin.services.create')}}">
        <i class="fas fa-plus"></i> Novo Serviço
      </a>
    </div>
    <div class="card-body">
      @if (count($services))
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Nome</th>
              <th>Descrição</th>
              <th>Editar</th>
            </tr>
          </thead>
          <tbody>
            @foreach($services as $service)
            <tr>
              <td>{{$service->nome}}</td>
              <td>{{$service->descricao}}</td>
              <td nowrap>
                <a class="btn btn-xs btn-primary btn-p" href="{{route('admin.services.show',$service)}}"><i class="fas fa-eye fa-xs"></i></a>
                <a class="btn btn-xs btn-warning btn-p" href="{{route('admin.services.edit',$service)}}"><i class="fas fa-pen fa-xs"></i></a>
                <form method="POST" action="{{route('admin.services.destroy',$service)}}" role="form" class="inline" onsubmit="return confirm('Confirma que pretende eliminar este serviço?');">
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
      <h6>Não existem serviços registados</h6>
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
      [0, 'asc']
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