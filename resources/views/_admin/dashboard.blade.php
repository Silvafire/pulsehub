@extends('layout.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-4">
                <div class="card shadow">
                    <div class="card-header p-4">
                        <h1 style="display:inline;"> {{ $count_users }} </h1>
                        <h3 style="display:inline;"> Utilizadores </h3>
                    </div>
                    <div class="card-body">
                        @foreach ($count_users_per_role as $item)
                            <p>{{ $item->roleToStr() }}: {{ $item->count }} utilizadores</p>
                        @endforeach
                    </div>
                </div>
                {{-- <div class="card shadow">
    <div class="card-header p-4">
        <h1 style="display:inline;"> {{ $count_modalidade }} </h1>
        <h3 style="display:inline;"> Modalidades </h3>
    </div>
    <div class="card-body">
        <p>Total de Modalidades: {{ $count_modalidade }}</p>
        @if (count($count_modalidades) > 0)
            <p>Modalidades por Categoria:</p>
            @foreach ($count_modalidades as $categoria)
                <p>{{ $categoria->roleToStr() }}: {{ $categoria->count }} modalidades</p>
            @endforeach
        @else
            <p>Nenhuma informação de categoria de modalidade disponível.</p>
        @endif
    </div>
</div> --}}
            </div>
        </div>
    </div>
@endsection
