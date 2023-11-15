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
        <a href="#nome" class="cta-button">Experimente</a>
    </div>
</section>

<div class="cardspeq">
    <div class="card-row">

        <div class="cardtreino">

            <div class="card-img">
                <img src="{{ asset('img/macho.jpg') }}" alt="Musculação">
            </div>

            <div class="card-texto">
                <h2>Musculação</h2>
                <p>Desenvolva a força e esculpa seu corpo com o Plano de Treino de Musculação. Este programa
                    intensivo é
                    projetado para impulsionar o crescimento muscular, aumentar a força e a definição. Com uma
                    combinação estratégica de exercícios compostos e isolados.</p>

                <div class="bot">
                    <a href="" class="cta-button2">Ler Mais</a>
                </div>

            </div>
        </div>

        <div class="cardtreino">

            <div class="card-img">
                <img src="{{ asset('img/bodybuildinguy.jpg') }}" alt="Bodybuilder">
            </div>

            <div class="card-texto">
                <h2>Bodybuilding</h2>
                <p>Desenvolva a força e esculpa seu corpo com o Plano de Treino de Musculação. Este programa
                    intensivo é projetado para impulsionar o crescimento muscular, aumentar a força e a definição.
                    Com uma combinação estratégica de exercícios compostos e isolados.</p>

                <div class="bot">
                    <a href="" class="cta-button2">Ler Mais</a>
                </div>

            </div>
        </div>

        <div class="cardtreino">

            <div class="card-img">
                <img src="{{ asset('img/cardioplan.jpg') }}" alt="Musculação">
            </div>

            <div class="card-texto">
                <h2>Cardio</h2>
                <p>O Plano de Treino Cardio, é projetado para impulsionar sua resistência cardiovascular e queimar
                    calorias de forma eficiente. Com uma combinação de exercícios de alta intensidade e períodos de
                    recuperação este plano melhora a saúde do coração, aumenta a energia e promove a perda de peso.
                </p>

                <div class="bot">
                    <a href="" class="cta-button2">Ler Mais</a>
                </div>

            </div>
        </div>
    </div>
    <div class="card-row">
        <div class="cardtreino">

            <div class="card-img">
                <img src="{{ asset('img/macho.jpg') }}" alt="Musculação">
            </div>

            <div class="card-texto">
                <h2>Musculação</h2>
                <p>Desenvolva a força e esculpa seu corpo com o Plano de Treino de Musculação. Este programa
                    intensivo é
                    projetado para impulsionar o crescimento muscular, aumentar a força e a definição. Com uma
                    combinação estratégica de exercícios compostos e isolados.</p>

                <div class="bot">
                    <a href="" class="cta-button2">Ler Mais</a>
                </div>

            </div>
        </div>

        <div class="cardtreino">

            <div class="card-img">
                <img src="{{ asset('img/bodybuildinguy.jpg') }}" alt="Musculação">
            </div>

            <div class="card-texto">
                <h2>Bodybuilding</h2>
                <p>Desenvolva a força e esculpa seu corpo com o Plano de Treino de Musculação. Este programa
                    intensivo é projetado para impulsionar o crescimento muscular, aumentar a força e a definição.
                    Com uma combinação estratégica de exercícios compostos e isolados.</p>

                <div class="bot">
                    <a href="" class="cta-button2">Ler Mais</a>
                </div>

            </div>
        </div>

        <div class="cardtreino">

            <div class="card-img">
                <img src="{{ asset('img/cardioplan.jpg') }}" alt="Musculação">
            </div>

            <div class="card-texto">
                <h2>Cardio</h2>
                <p>O Plano de Treino Cardio, é projetado para impulsionar sua resistência cardiovascular e queimar
                    calorias de forma eficiente. Com uma combinação de exercícios de alta intensidade e períodos de
                    recuperação este plano melhora a saúde do coração, aumenta a energia e promove a perda de peso.
                </p>

                <div class="bot">
                    <a href="" class="cta-button2">Ler Mais</a>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="profissionais">
    <div class="cards" >
    <div class="cardprof">

        <div class="profimg">
            <img src="{{ asset('img/carlos alcaraz.jpg') }}" alt="">
        </div>
        <div class="botao">
            <a  class="cta-button3">Ler Mais</a>
        </div>

    </div>

    <div class="cardprof">

        <div class="profimg">
            <img src="{{ asset('img/David Laid.jpg') }}" alt="">
        </div>
        <div class="botao">
            <a  class="cta-button3">Ler Mais</a>
        </div>

    </div>

    <div class="cardprof">

        <div class="profimg">
            <img src="{{ asset('img/LeBron James.jpg') }}" alt="">
        </div>
        <div class="botao">
            <a  class="cta-button3">Ler Mais</a>
        </div>

    </div>

    <div class="cardprof">

        <div class="profimg">
            <img src="{{ asset('img/noah_lyles.jpg') }}" alt="">
        </div>
        <div class="botao">
            <a  class="cta-button3">Ler Mais</a>
        </div>

    </div>
</div>

</div>

@endsection
