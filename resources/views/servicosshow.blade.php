@extends('layout.master')

@section('moreCSS')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/servicos.css') }}" />

@endsection

@section('title', 'Serviços Detalhes')

@section('content')
    <div class="bannerdetalhe">
        <h2 class="text-center">Detalhes do {{ $service->nome }}</h2>
    </div>
    <div>
        @foreach ($service->images as $image)
            <tr>
                <td>
                    <img src="{{ asset('storage/image_services/' . $image->imagem) }}" class="img-post" alt=""
                        style="width: 80px; height: auto;">
                </td>
        @endforeach
    </div>
@endsection

@section('moreScripts')

@endsection
