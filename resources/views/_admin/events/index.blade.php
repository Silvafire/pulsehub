@extends ("layout.admin")


@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Eventos</h1>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a class="btn btn-primary" href="{{ route('admin.events.create') }}">
                    <i class="fas fa-plus"></i> Novo Evento
                </a>
                <a class="btn btn-primary" href="{{ route('admin.tipo_eventos_mod.create') }}">
                    <i class="fas fa-plus"></i> Novo Tipo Evento
                </a>
            </div>
            <div class="card-body">
                @if (count($events))
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                  <th>Imagem</th>
                                    <th>Nome</th>
                                    <th>Descrição</th>
                                    <th>Categoria</th>
                                    <th>Editar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($events as $event)
                                    <tr>
                                      <td>
                                          @if ($event->img)
                                              <img height='80'
                                                  src="{{ asset('storage/eventos_imagens/' . $event->img) }}"
                                                  alt="Imagem do evento">
                                          @endif
                                      </td>
                                        <td>{{ $event->nome }}</td>
                                        <td>{{ $event->descricao }}</td>
                                        <td>{{ $event->tipo->nome }}</td>
                                        <td nowrap>
                                            <a class="btn btn-xs btn-primary btn-p"
                                                href="{{ route('admin.events.show', $event) }}"><i
                                                    class="fas fa-eye fa-xs"></i></a>
                                            <a class="btn btn-xs btn-warning btn-p"
                                                href="{{ route('admin.events.edit', $event) }}"><i
                                                    class="fas fa-pen fa-xs"></i></a>
                                            <form method="POST" action="{{ route('admin.events.destroy', $event) }}"
                                                role="form" class="inline"
                                                onsubmit="return confirm('Confirma que pretende eliminar este registo?');">
                                                @csrf
                                                @method('DELETE')
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
                    <h6>Não existem Eventos registados</h6>
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
