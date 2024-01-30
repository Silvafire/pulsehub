@extends('layout.master')

@section('moreCSS')
<link rel="stylesheet" href="{{asset('css/postdetails.css') }}">
@endsection

@section('title', 'Blog Detalhes')

@section('content')

<div class="content">
<section id="main2">
<div class="post2">
    <div class="container">
    <img src="{{ asset('storage/post_imagens/' . $post->imagem) }}" alt="{{ $post->titulo }}" class="imgpost2">
    </div>
    <div class="todainformacao">
        <h6 id="nomepost2">{{ $post->titulo }}</h6>
        <p id="tipopost2">{{ $post->tipo_post->nome }}</p>
        <div class="divisorbloco">
            <div class="linha"></div>
        </div>
        <div id="descricaopost2">
            <p>{{$post->descricao}}</p>
        </div>
        <div id="informacaopost2">
            <p>{{$post->informacao}}</p>
        </div>
    </div>
</div>
</section>
</div>

@endsection

@section('moreScripts')

@endsection

