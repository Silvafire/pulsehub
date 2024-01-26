@extends('layout.master')

@section('moreCSS')
<link rel="stylesheet" href="{{ asset('css/PlanosTreino.css') }}">
@endsection

@section('title', 'PlanosTreino')

@section('content')

<section class="banner">
    <div class="content">
        <div class="title">Detalhes</div>
    </div>
    <div class="baq">

    </div>
</section>




<div class="profissionais">
    <h1>Planos de Atletas</h1>
    <div class="cards">
        <div class="cardprof">

            <div class="profimg">
                <img src="{{ asset('img/carlos alcaraz.jpg') }}" alt="">
            </div>
            <div class="botao">
                <a class="cta-button3">Ler Mais</a>
            </div>

        </div>

        <div class="cardprof">

            <div class="profimg">
                <img src="{{ asset('img/David Laid.jpg') }}" alt="">
            </div>
            <div class="botao">
                <a class="cta-button3">Ler Mais</a>
            </div>

        </div>

        <div class="cardprof">

            <div class="profimg">
                <img src="{{ asset('img/LeBron James.jpg') }}" alt="">
            </div>
            <div class="botao">
                <a class="cta-button3">Ler Mais</a>
            </div>

        </div>

        <div class="cardprof">

            <div class="profimg">
                <img src="{{ asset('img/noah_lyles.jpg') }}" alt="noah">
            </div>
            <div class="botao">
                <a class="cta-button3">Ler Mais</a>
            </div>

        </div>
    </div>
</div>
@endsection

@section('moreScripts')

@endsection
