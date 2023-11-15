@extends('layout.master')

@section('moreCSS')
    <link rel="stylesheet" href="{{ asset('css/modalidades.css') }}">
@endsection

@section('title', 'Modalidades')

@section('content')
    <div class="banner">
        <img class="darken" src="{{ asset('img/fundo_modalidades.jpg') }}" alt="fundo de modalidades">
        <div class="middle-title">
            <h1>Modalidades</h1>
        </div>
        <div class="button-container">
            <a href="#bottom-title" class="custom-button">
                <img src="{{ asset('img/icons8-down-button-50.png') }}" alt="Ícone do Botão">
            </a>
        </div>
    </div>
    <div class="bottom-title" id="bottom-title">
        <h2>Categorias de modalidades</h2>
        <!-- Carrossel de cards -->
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{ asset('img/cardio.svg') }}" class="card-img-top" alt="card_1">
                                <div class="card-body">
                                    <h5 class="card-title">Cardio</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{ asset('img/forca.svg') }}" class="card-img-top" alt="card_2">
                                <div class="card-body">
                                    <h5 class="card-title">Força</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{ asset('img/cerebro.svg') }}" class="card-img-top" alt="card_3">
                                <div class="card-body">
                                    <h5 class="card-title">Corpo e mente</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item desactive">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{ asset('img/ar-livre.svg') }}" class="card-img-top" alt="card_4">
                                <div class="card-body">
                                    <h5 class="card-title">Ar livre</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{ asset('img/arte.svg') }}" class="card-img-top" alt="card_5">
                                <div class="card-body">
                                    <h5 class="card-title">Arte Marcial</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{ asset('img/casa.svg') }}" class="card-img-top" alt="card_6">
                                <div class="card-body">
                                    <h5 class="card-title">Casa</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item desactive">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{ asset('img/danca.svg') }}" class="card-img-top" alt="card_7">
                                <div class="card-body">
                                    <h5 class="card-title">Dança</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{ asset('img/ginastica.svg') }}" class="card-img-top" alt="card_8">
                                <div class="card-body">
                                    <h5 class="card-title">Ginástica</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{ asset('img/jogos-de-desporto.svg') }}" class="card-img-top" alt="card_9">
                                <div class="card-body">
                                    <h5 class="card-title">Jogos de Desporto</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <!-- Botão para ir para o slide anterior -->
                <img src="{{ asset('img/icons8-arrow-100-l.png') }}" alt="Anterior" class="carousel-control-img">
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <!-- Botão para ir para o próximo slide -->
                <img src="{{ asset('img/icons8-arrow-100-r.png') }}" alt="Próximo" class="carousel-control-img">
            </button>
        </div>
    </div>
    <div class="modalidades">
        <div class="modalidade">
            <div class="content-1">
                <div class="image">
                    <img src="{{ asset('img/ciclismo.jpeg') }}" alt="Descrição da imagem">
                </div>
                <div class="text">
                    <h2>Ciclismo</h2>
                    <p>Aula de ciclismo indoor (”indoor cycling”) onde pedalas ao ritmo de músicas estimulantes e poderosas!
                    </p>
                    <button>Mais informação</button>
                </div>
            </div>
        </div>
        <div class="modalidade">
            <div class="content-2">
                <div class="image">
                    <img src="{{ asset('img/ciclismo.jpeg') }}" alt="Descrição da imagem">
                </div>
                <div class="text">
                    <h2>Ciclismo</h2>
                    <p>Aula de ciclismo indoor (”indoor cycling”) onde pedalas ao ritmo de músicas estimulantes e
                        poderosas!</p>
                    <button>Mais informação</button>
                </div>
            </div>
        </div>
        <div class="modalidade">
            <div class="content-1">
                <div class="image">
                    <img src="{{ asset('img/ciclismo.jpeg') }}" alt="Descrição da imagem">
                </div>
                <div class="text">
                    <h2>Ciclismo</h2>
                    <p>Aula de ciclismo indoor (”indoor cycling”) onde pedalas ao ritmo de músicas estimulantes e
                        poderosas!</p>
                    <button>Mais informação</button>
                </div>
            </div>
        </div>
        <div class="modalidade">
            <div class="content-2">
                <div class="image">
                    <img src="{{ asset('img/ciclismo.jpeg') }}" alt="Descrição da imagem">
                </div>
                <div class="text">
                    <h2>Ciclismo</h2>
                    <p>Aula de ciclismo indoor (”indoor cycling”) onde pedalas ao ritmo de músicas estimulantes e
                        poderosas!</p>
                    <button>Mais informação</button>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('moreScripts')

@endsection
