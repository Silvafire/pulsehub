@extends('layout.master')

@section('moreCSS')
    <link rel="stylesheet" href="{{ asset('css/modalidades.css') }}">
@endsection

@section('title', 'Modalidade ')

@section('content')
    <div class="modalidades">
        <div class="modalidade">
            <div class="content-1">
                <div class="image">
                    <img src="{{ asset('storage/modalidades_imagens/' . $modalidade->imagem) }}" alt="Descrição da imagem">
                </div>
                <div class="text">
                    <h2>{{ $modalidade->nome }}</h2>
                    <p>{{ $modalidade->descricao }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('moreScripts')

@endsection
