@extends('layout.master')

@section('moreCSS')
<link rel="stylesheet" href="{{ asset('css/PlanosTreino.css') }}">
@endsection

@section('title', 'PlanosTreino')

@section('content')

<section class="bannerdet">
    <img src="{{ asset('storage/tiposplanos_imagens/' . $tipoplano->imagem) }}" alt="Musculação">
    <div class="content">

        <div class="title">{{ $tipoplano->nome }}</div>
    </div>
    <div class="baq">
    </div>
</section>

<div class="descdet">

<h1>Detalhes do Tipo de Plano</h1>
<p>{{ $tipoplano->descricao }}</p>

</div>


<div class="segparte">
<div class="cardetalhe">
    <h1>Planos Relacionados</h1>
    <div class="card-row2">
        @if(!is_null($planos) && count($planos) > 0)
            @foreach ($planos as $plano)
                <div class="cardex">
                    <h2>Exercício: {{ $plano->nome_exercicio }}</h2>
                    <div class="textoad">
                        <div class="posição-esquerda">
                            <p>Tempo de Exercício: {{ $plano->tmp_exercicio }} minutos</p>
                            <p>Duração Total: {{ $plano->duracao_total }} minutos</p>
                        </div>
                        <div class="posição-direita">
                            <p>Repetições: {{ $plano->repeticoes }}</p>
                            <p>Séries: {{ $plano->series }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <p>Nenhum detalhe disponível no momento.</p>
        @endif
    </div>
</div>
</div>
@endsection

@section('moreScripts')

@endsection
