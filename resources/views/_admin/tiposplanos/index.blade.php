@extends ("layout.admin")


@section("content")
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Tipo Planos</h1>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <a class="btn btn-primary" href="{{route('admin.tiposplanos.create')}}">
        <i class="fas fa-plus"></i> Novo Tipo Planos
      </a>
    </div>
    <div class="card-body">
      @if (count($tiposplanos))
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Imagem</th>
              <th>Nome</th>
              <th>Descrição</th>
              <th>Editar</th>
            </tr>
          </thead>
          <tbody>
            @foreach($tiposplanos as $tiposplano)
            <tr>
            <td> <img height='80' src="{{asset('storage/tipoplanos_imagens/'. $tiposplano->imagem )}}" alt="Imagem do tipo plano"></td>
              <td>{{$tiposplano->nome}}</td>
              <td>{{$tiposplano->descricao}}</td>
              <td nowrap>
                <a class="btn btn-xs btn-primary btn-p" href="{{route('admin.tiposplanos.show',$tiposplano)}}"><i class="fas fa-eye fa-xs"></i></a>
                <a class="btn btn-xs btn-warning btn-p" href="{{route('admin.tiposplanos.edit',$tiposplano)}}"><i class="fas fa-pen fa-xs"></i></a>
                <form method="POST" action="{{route('admin.tiposplanos.destroy',$tiposplano)}}" role="form" class="inline" onsubmit="return confirm('Confirma que pretende eliminar este tipo de plano?');">
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
      <h6>Não existem tipos de planos registados</h6>
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
        {
            "orderable": false
        },
        null,
        null,
        null,
        {
            "orderable": false
        }
            ]
        });
</script>
@endsection
