@extends('layout.master')

@section('moreCSS')
    <link rel="stylesheet" href="{{ asset('css/modalidades.css') }}">
@endsection

@section('title', 'Modalidade ')

@section('content')

    <div class="image">
        <img src="{{ asset('storage/modalidades_imagens/' . $modalidade->imagem) }}" alt="Descrição da imagem">
    </div>
    <div class="modalidades">
        <div class="modalidade">
            <div class="content-1">

                <div class="text">
                    <h2>{{ $modalidade->nome }}</h2>
                    <p>{{ $modalidade->descricao }}</p>
                    <p>{{ $modalidade->tipo->nome }}</p>
                    @if (count($modalidade->staff))
                        <div><strong>Staff associado à modalidade: </strong>
                            <ul>
                                @foreach ($modalidade->staff as $membro)
                                    <li>
                                        {{ $membro->nome . ' ' . $membro->apelido }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if (count($modalidade->planos))
                        <div><strong>Planos associado à modalidade: </strong>
                            <ul>
                                @foreach ($modalidade->planos as $plano)
                                    <li>
                                        {{ $plano->tipo_plano->nome . '-' . $plano->duracao_total }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

@section('moreScripts')

@endsection
