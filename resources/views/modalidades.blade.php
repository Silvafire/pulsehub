@extends('layout.master')

@section('moreCSS')
    <link rel="stylesheet" href="{{ asset('css/modalidades.css') }}">
@endsection

@section('title', 'Modalidades')

@section('content')
    <div id="page-top" class="banner">
        <div id="img" class="darken">
            <img src="{{ asset('img/fundo_modalidades.jpg') }}" alt="fundo de modalidades">
        </div>
        <div class="middle-title">
            <h1>Modalidades</h1>
        </div>
        <div class="button-container">
            <a href="#categorias" class="custom-button">
                <img src="{{ asset('img/icons8-down-button-50.png') }}" alt="Ícone do Botão">
            </a>
        </div>
    </div>



    <div class="container">
        <div class="bottom-title" id="categorias">
            <h2>Categorias das modalidades</h2>

            @if($tipo_eventos_mods->isEmpty())
                <p>Não há categorias disponíveis no momento.</p>
            @else
                <!-- Carrossel de cards -->
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($tipo_eventos_mods->chunk(3) as $key => $chunk)
                            <div class="carousel-item{{ $key == 0 ? ' active' : '' }}">
                                <div class="row justify-content-center">
                                    @foreach ($chunk as $tipo_evento_mod)
                                        <div class="col-md-3">
                                            <div class="card d-flex align-items-center justify-content-center">
                                                @if ($tipo_evento_mod->imagem)
                                                    <img src="{{ asset('storage/tipo_modalidades/' . $tipo_evento_mod->imagem) }}" class="card-img-top" alt="Imagem do tipo eventos modo">
                                                @endif
                                                <div class="card-body">
                                                    <h5 class="card-title">{{ $tipo_evento_mod->nome }}</h5>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <img src="{{ asset('img/icons8-arrow-100-l.png') }}" alt="Anterior">
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <img src="{{ asset('img/icons8-arrow-100-r.png') }}" alt="Próximo">
                    </button>
                </div>
            @endif
        </div>
    </div>


    <div class="modalidades">
        <div class="modalidade">
            @if ($modalidades && count($modalidades))
                @foreach ($modalidades as $key => $modalidade)
                    <div class="content-{{ ($key % 2) + 1 }}">
                        <div class="image">
                            <img src="{{ asset('storage/modalidades_imagens/' . $modalidade->imagem) }}"
                                alt="Descrição da imagem">
                        </div>
                        <div class="text">
                            <h2>{{ $modalidade->nome }}</h2>
                            <p>{{ $modalidade->descricao }}</p>
                            <button><a href="{{ route('modalidadeshow', $modalidade) }}">Mais informação</a></button>
                        </div>
                    </div>
                @endforeach
            @else
                <p>Nenhuma modalidade disponível no momento.</p>
            @endif
        </div>
    </div>

@endsection

@section('moreScripts')

@endsection
