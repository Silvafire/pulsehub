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
            <a href="#bottom-title" class="custom-button">
                <img src="{{ asset('img/icons8-down-button-50.png') }}" alt="Ícone do Botão">
            </a>
        </div>
    </div>
    <!-- event Section Begin -->
    <section class="event-section spad">
        <div class="container" id="eventf">
            <div class="row">
                <div class="col-lg-8 p-0">
                    @foreach ($events as $event)
                        @if ($event)
                            <div class="event-item">
                                <div class="bi-pic">
                                    <img src="{{ asset('storage/eventos_imagens/' . $event->img) }}" alt="">
                                </div>
                                <div class="bi-text">
                                    <h5><a href="{{-- {{ route('event.details', ['id' => $event['id']]) }} --}}">{{ $event->nome }}</a>
                                    </h5>
                                    <ul>
                                        <li>{{ $event->data }}</li>
                                        <li>{{ $event->descricao }}</li>
                                    </ul>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>

        </div>
        </div>
    </section>
    <!-- event Section End -->

@endsection

@section('moreScripts')

@endsection
