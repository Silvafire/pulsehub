@extends('layout.master')

@section('moreCSS')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/eventos.css') }}" />

@endsection

@section('title', 'Eventos Detalhes')

@section('content')
    <div class="bannerdetalhe">
        <h2 class="text-center">{{ $event->nome }}</h2>
    </div>
    <div class="container">
        <tr>
            <td>
                @if ($event->img == null)
                            <img class="card-img-top" alt="event img"
                                src="{{ asset('storage/eventos_imagens/default.jpg') }}">
                        @else
                            <img class="card-img-top" alt="event img"
                                src="{{ asset('storage/eventos_imagens/' . $event->img) }}">
                        @endif
            </td>
        </tr>
    </div>
    <div class="descricaodetalhe">
        <p>{!! $event->descricao !!}</p>
    </div>
  
@endsection

@section('moreScripts')

@endsection
