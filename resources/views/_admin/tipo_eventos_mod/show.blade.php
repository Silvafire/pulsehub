@extends('layout.admin')

@section('content')
    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                Informação do tipo eventos/modalidades
            </div>
            <div class="card">
                <div class="card-body">
                    <div>
                        <strong>Imagem:</strong>
                        <img src="{{ asset('storage/tipo_modalidades/' . $tipo_eventos_mod->imagem) }}" alt="Imagem da modalidade" style="max-width: 300px;">
                    </div>
                    <div class="mr-3">
                        <strong>Nome:</strong> {{ $tipo_eventos_mod->nome }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
