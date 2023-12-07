@extends ("layout.admin")


@section("content")
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Servico: {{$service->nome}}</h1>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <a class="btn btn-primary" href="{{ route('admin.services.images.create', $service) }}">
        <i class="fas fa-plus"></i> Nova imagem
      </a>
    </div>
    <div class="card-body">
      @if (count($service->images))
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Imagem</th>
            </tr>
          </thead>
          <tbody>
            @foreach($service->images as $image)
            <tr>
                <td>
              <img src="{{asset('storage/image_services/'. $image->imagem)}}" class="img-post" alt="">
            </td>
              <td nowrap>
                <a class="btn btn-xs btn-warning btn-p" href="{{ route('admin.services.images.edit', [$service, $image]) }}"><i class="fas fa-pen fa-xs"></i></a>
                <form method="POST" action="{{ route('admin.services.images.destroy', [$service, $image]) }}" role="form" class="inline" onsubmit="return confirm('Confirma que pretende eliminar esta imagem do serviço?');">
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
      <h6>Não existem imagens registadas</h6>
      @endif
    </div>
  </div>
</div>
@endsection

@section("scripts")

<script>
  $('#dataTable').dataTable({
    destroy: true,
    "columns": [
        {
        "orderable": false
      },
      {
        "orderable": false
      }
    ]
  });
</script>
@endsection
