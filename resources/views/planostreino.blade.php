@extends('layout.master')

@section('moreCSS')
    <link rel="stylesheet" href="{{ asset('css/PlanosTreino.css') }}">
@endsection

@section('title', 'PlanosTreino')

@section('content')

    <section class="banner">
        <div class="content">
            <div class="title">PLANOS DE TREINO</div>
        </div>
        <div class="baq">

        </div>
    </section>

    <div class="cardspeq">
        <div class="card-row">

            @if (!is_null($tiposplanos) && count($tiposplanos) > 0)
                @foreach ($tiposplanos as $tipoplano)
                @if (strtolower($tipoplano->classe) == 'normal')
                    <div class="cardtreino">
                        <div class="card-img">
                            <img src="{{ asset('storage/tiposplanos_imagens/' . $tipoplano->imagem) }}" alt="Musculação">
                        </div>
                        <div class="card-texto">
                            <h2>{{ $tipoplano->nome }}</h2>
                            <p>{{ $tipoplano->descricao }}</p>
                            <div class="bot">
                                <a href="{{ route('planosdetails', $tipoplano) }}" class="cta-button2">Ler Mais</a>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
            @else
                <p>Nenhum tipo de plano disponível no momento.</p>
            @endif

        </div>
    </div>


    <div class="profissionais">
        <h1>Planos de Atletas</h1>
        <div class="cards">
            @if (!is_null($tiposplanos) && count($tiposplanos) > 0)
                @foreach ($tiposplanos as $tipoplano)
                    @if (strtolower($tipoplano->classe) == 'atleta')
                        <div class="cardprof">
                            <div class="profimg">
                                <img src="{{ asset('storage/tiposplanos_imagens/' . $tipoplano->imagem) }}" alt="">
                            </div>
                            <div class="botao">
                                <a href="{{ route('planosdetails', $tipoplano) }}" class="cta-button3">Ler Mais</a>
                            </div>
                        </div>
                    @endif
                @endforeach
            @else
                <p>Nenhum plano de atleta disponível no momento.</p>
            @endif
        </div>
    </div>
@endsection

@section('moreScripts')

@endsection
