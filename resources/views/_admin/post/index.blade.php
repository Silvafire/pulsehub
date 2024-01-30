@extends ("layout.admin")


@section("content")
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Post</h1>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <a class="btn btn-primary" href="{{route('admin.post.create')}}">
        <i class="fas fa-plus"></i> Novo Post
      </a>
      <a class="btn btn-primary" href="{{route('admin.tipopost.create')}}">
        <i class="fas fa-plus"></i> Novo Tipo de Post
      </a>
    </div>
    <div class="card-body">
      @if (count($post))
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Imagem</th>
              <th>Titulo</th>
              <th>Descrição</th>
              <th>Informação</th>
              <th>Editar</th>
            </tr>
          </thead>
          <tbody>
            @foreach($post as $post)
            <tr>
            <td> <img height='100' src="{{asset('storage/post_imagens/'. $post->imagem )}}" alt="Imagem do Post"></td>
            <td>{{ Str::of($post->titulo)->limit(50) }}</td>
              <td>{{ Str::of($post->descricao)->limit(50) }}</td>
              <td>{{ Str::of($post->informacao)->limit(30) }}</td>
              <td nowrap>
                <a class="btn btn-xs btn-primary btn-p" href="{{route('admin.post.show',$post)}}"><i class="fas fa-eye fa-xs"></i></a>
                <a class="btn btn-xs btn-warning btn-p" href="{{route('admin.post.edit',$post)}}"><i class="fas fa-pen fa-xs"></i></a>
                <form method="POST" action="{{route('admin.post.destroy',$post)}}" role="form" class="inline" onsubmit="return confirm('Confirma que pretende eliminar este post?');">
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
      <h6>Não existem posts registados</h6>
      @endif
    </div>
  </div>
</div>
@endsection

@section('scripts')
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
