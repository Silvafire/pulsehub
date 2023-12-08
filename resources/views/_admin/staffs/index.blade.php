@extends ("layout.admin")


@section("content")
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Staffs</h1>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <a class="btn btn-primary" href="{{route('admin.staffs.create')}}">
        <i class="fas fa-plus"></i> Novo Staff
      </a>

    </div>
    <div class="card-body">
      @if (count($staffs))
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
          <tr>
                <th>Nome</th>
                <th>Apelido</th>
                <th>Imagem</th>
               <th>Categoria</th>
               <th>Editar</th>
          </tr>
          </thead>
          <tbody>
            @foreach($staffs as $staff)
            <tr>
              <td>{{$staff->nome}}</td>
              <td>{{$staff->apelido}}</td>
              <td> <img height='80' src="{{asset('storage/staff_imagens/'. $staff->img )}}" alt="Imagem da modalidade"></td>
              <td>{{ $staff->nome}}</td>
              <td nowrap>
                <a class="btn btn-xs btn-primary btn-p" href="{{route('admin.staffs.show',$staff)}}"><i class="fas fa-eye fa-xs"></i></a>
                <a class="btn btn-xs btn-warning btn-p" href="{{route('admin.staffs.edit',$staff)}}"><i class="fas fa-pen fa-xs"></i></a>
                <form method="POST" action="{{route('admin.staffs.destroy',$staff)}}" role="form" class="inline" onsubmit="return confirm('Confirma que pretende eliminar este registo?');">
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
      <h6>Não existem Staffs registados</h6>
      @endif
    </div>
  </div>
</div>
@endsection

@section("scripts")

<script>
  $('#dataTable').dataTable( {
  destroy: true,
    "order": [[ 0, 'asc' ]],
	"columns": [
	  null,
    null,
    { "orderable": false }
  ]
} );

</script>
@endsection
