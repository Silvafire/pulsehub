@extends('layout.admin')

@section('content')
    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                Informação do tipo eventos/modalidades
            </div>
            <div class="card-body">

                <div><strong>Nome:</strong>{{ $tipo_eventos_mod->nome }}</div>
                <div><strong>imagem:</strong>{{ $tipo_eventos_mod->imagem }}</div>

            </div>
        </div>
    </div>
@endsection
