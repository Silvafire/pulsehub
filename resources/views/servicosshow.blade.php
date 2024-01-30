@extends('layout.master')

@section('moreCSS')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/servicos.css') }}" />

@endsection

@section('title', 'Serviços Detalhes')

@section('content')
    <div class="bannerdetalhe" id="page-top">
        <h2 class="text-center">{{ $service->nome }}</h2>
    </div>
    <div class="container">
    @foreach ($service->images->skip(1) as $image)
            <tr>
                <td>
                    <img src="{{ asset('storage/image_services/' . $image->imagem) }}" class="imagensdetalhe" alt="">
                </td>
            </tr>
        @endforeach
    </div>
    <div class="descricaodetalhe"><p>{!! $service->descricao !!}</p></div>
@endsection

@section('moreScripts')

@endsection
