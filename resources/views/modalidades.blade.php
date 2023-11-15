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
            <a href="#" class="custom-button">
                <img src="{{ asset('img/icons8-down-button-50.png') }}" alt="Ícone do Botão">
            </a>
        </div>
    </div>

@endsection

@section('moreScripts')
    <!-- opcional -->
@endsection
