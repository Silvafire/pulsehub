@extends ("layout.admin")


@section("content")
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Planos</h1>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <a class="btn btn-primary" href="{{route('admin.planos.create')}}">
        <i class="fas fa-plus"></i> Novo Plano
      </a>
      <a class="btn btn-primary" href="{{route('admin.tiposplanos.create')}}">
        <i class="fas fa-plus"></i> Novo Tipo de Planos
      </a>
    </div>
    <div class="card-body">
      @if (count($planos))
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Nome_Exercicio</th>
              <th>Series</th>
              <th>Duracao_Total</th>
              <th>Tmp_Exercicio</th>
              <th>Repeticoes</th>
              <th>Tipo plano</th>
              <th>Modalidade</th>
              <th>Editar</th>
            </tr>
          </thead>
          <tbody>
            @foreach($planos as $plano)
            <tr>
              <td>{{$plano->nome_exercicio}}</td>
              <td>{{$plano->series}}</td>
              <td>{{$plano->duracao_total}}</td>
              <td>{{$plano->tmp_exercicio}}</td>
              <td>{{$plano->repeticoes}}</td>
              <td>{{$plano->tipo_plano->nome}}</td>
              <td>{{$plano->modalidade->nome}}</td>
              <td nowrap>
                <a class="btn btn-xs btn-primary btn-p" href="{{route('admin.planos.show',$plano)}}"><i class="fas fa-eye fa-xs"></i></a>
                <a class="btn btn-xs btn-warning btn-p" href="{{route('admin.planos.edit',$plano)}}"><i class="fas fa-pen fa-xs"></i></a>
                <form method="POST" action="{{route('admin.planos.destroy',$plano)}}" role="form" class="inline" onsubmit="return confirm('Confirma que pretende eliminar esta modalidade?');">
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
      <h6>Não existem planos registados</h6>
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
      null,
      null,
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
