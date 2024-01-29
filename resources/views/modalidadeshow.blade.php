@extends('layout.master')

@section('moreCSS')
    <link rel="stylesheet" href="{{ asset('css/modalidades.css') }}">
@endsection

@section('title', 'Modalidade ' . $modalidade->nome)

@section('content')


    <div id="page-top" class="showmodalidades">
        <div class="categoriashow">
            <p>{{ $modalidade->tipo->nome }}</p>
        </div>
        <div class="nomeshow">
            <h2>{{ $modalidade->nome }}</h2>
        </div>
        <div class="image">
            <img src="{{ asset('storage/modalidades_imagens/' . $modalidade->imagem) }}" alt="Descrição da imagem">
        </div>
        <div class="modalidadeshows">
            <div class="modalidadeshow">
                <div class="descricao">
                    <p>{{ $modalidade->descricao }}</p>
                </div>

                <div class="showsatff">
                    @if (count($modalidade->staff))
                        <div><strong>Staff associado à modalidade: </strong>
                            <div class="staff-cards">
                                @foreach ($modalidade->staff as $membro)
                                    <div class="card">
                                        @php
                                            $imageUrl = asset('storage/staff_imagens/' . $membro->img);
                                        @endphp
                                        <img src="{{ $imageUrl }}" alt="{{ $membro->nome . ' ' . $membro->apelido }}"
                                            class="card-image">
                                        <div class="card-body">
                                            <p>{{ $membro->nome . ' ' . $membro->apelido }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        @else
                        <p>Nenhum staff associado a esta modalidade.</p>
                    @endif
                </div>

                <div class="showplanos">
                    @if (count($modalidade->planos))
                        <div><strong>Números de planos associados à modalidade: </strong>
                            @php
                                $nomesDosPlanos = [];
                                $duracoesDosPlanos = [];
                                $count = 0;
                            @endphp

                            @foreach ($modalidade->planos as $plano)
                                @php
                                    $nomeDoPlano = $plano->tipo_plano->nome;
                                    $duracaoDoPlano = $plano->duracao_total;
                                    $nomesDosPlanos[$nomeDoPlano][] = $duracaoDoPlano;
                                @endphp
                            @endforeach

                            @foreach ($nomesDosPlanos as $nome => $duracoes)
                                @if ($count % 3 == 0)
                                    <div class="plan-group">
                                @endif
                                <ul>{{ $nome }}: {{ count($duracoes) }} planos
                                    <li>Duração mínima: {{ min($duracoes) }} min</li>
                                    <li>Duração máxima: {{ max($duracoes) }} min</li>
                                </ul>
                                @php $count++ @endphp
                                @if ($count % 3 == 0 || $count == count($nomesDosPlanos))
                        </div>
                    @endif
                    @endforeach
                </div>
            @else
                <p>Nenhum plano associado à modalidade.</p>
                @endif
            </div>
        </div>
    </div>
    </div>
    </div>

@endsection

@section('moreScripts')

@endsection
