@extends('layout.master')

@section('moreCSS')
    <link rel="stylesheet" href="{{ asset('css/eventos.css') }}">
@endsection

@section('title', 'Eventos')

@section('content')
    <div class="banner">
        <img class="darken" src="{{ asset('img/fundo_eventos.jpg') }}" alt="fundo de eventos">
        <div class="middle-title">
            <h1>Eventos</h1>
        </div>
        <div class="button-container">
            <a href="#eventos" class="custom-button">
                <img src="{{ asset('img/icons8-down-button-50.png') }}" alt="Ícone do Botão">
            </a>
        </div>
    </div>
    <!-- event Section Begin -->
    <main class="eventos" id="eventos">
        <div class="container-grid">
            @if (count($events) > 0)
                @foreach ($events as $event)
                    <div class="eventos-card card mb-3">
                        @if ($event->img == null)
                            <img class="card-img-top" alt="event img"
                                src="{{ asset('storage/eventos_imagens/default.jpg') }}">
                        @else
                            <img class="card-img-top" alt="event img"
                                src="{{ asset('storage/eventos_imagens/' . $event->img) }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $event->nome }}</h5>
                            <p class="card-text">{{ $truncated = Str::of($event->descricao)->limit(90) }}</p>

                            <p class="card-text">{{ $event->tipo->nome }}</p>
                            <a href="{{ route('eventshow', $event) }}" class="d-flex justify-content-center"> <input
                                    type="button" value="Ver Mais" class="btn-1 show-container"></a>
                        </div>
                    </div>
                @endforeach
            @else
                <h1 class="erro-message">Não existem Eventos</h1>
            @endif
        </div>
    </main>

    <!-- event Section End -->

@endsection

@section('moreScripts')

@endsection
