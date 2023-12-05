@extends ("layout.admin")


@section("content")
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Modalidades</h1>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <a class="btn btn-primary" href="{{route('admin.modalidades.create')}}">
        <i class="fas fa-plus"></i> Nova Modalidade
      </a>
      <a class="btn btn-primary" href="#">
        <i class="fas fa-plus"></i> Novo Tipo Modalidade
      </a>
    </div>
    <div class="card-body">
      @if (count($modalidades))
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Nome</th>
              <th>Descrição</th>
              <th>Imagem</th>
              <th>Staff_id</th>
              <th>Categoria</th>
              <th>Editar</th>
            </tr>
          </thead>
          <tbody>
            @foreach($modalidades as $modalidade)
            <tr>
              <td>{{$modalidade->nome}}</td>
              <td>{{$modalidade->descricao}}</td>
              <td>{{$modalidade->imagem}}</td>
              <td>{{$modalidade->staff_id}}</td>
              <td>{{$modalidade->tipo_eventos_mod_id}}</td>
              <td nowrap>
                <a class="btn btn-xs btn-primary btn-p" href="{{route('admin.modalidades.show',$modalidade)}}"><i class="fas fa-eye fa-xs"></i></a>
                <a class="btn btn-xs btn-warning btn-p" href="{{route('admin.modalidades.edit',$modalidade)}}"><i class="fas fa-pen fa-xs"></i></a>
                <form method="POST" action="{{route('admin.modalidades.destroy',$modalidade)}}" role="form" class="inline" onsubmit="return confirm('Confirma que pretende eliminar esta modalidade?');">
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
      <h6>Não existem modalidades registados</h6>
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
