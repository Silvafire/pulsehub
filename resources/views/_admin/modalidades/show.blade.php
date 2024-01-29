@extends('layout.admin')

@section('content')
    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                Informação da Modalidade
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <strong>Imagem:</strong>
                        <img class="img-fluid" src="{{ asset('storage/modalidades_imagens/' . $modalidade->imagem) }}"
                            alt="Imagem da modalidade">
                    </div>

                    <div class="col-md-9">
                        <div class="mb-3">
                            <strong>Nome:</strong> {{ $modalidade->nome }}
                        </div>
                        <div class="mb-3">
                            <strong>Categoria:</strong> {{ $modalidade->tipo->nome }}
                        </div>
                        <div class="mb-3">
                            <strong>Descrição:</strong> {{ $modalidade->descricao }}
                        </div>


                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        @if (count($modalidade->staff))
                            <div class="mb-3">
                                <strong>Staff associado à modalidade:</strong>
                                <ul class="list-unstyled">
                                    @foreach ($modalidade->staff as $membro)
                                        <li>{{ $membro->nome . ' ' . $membro->apelido }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>

                    <div class="col-md-6">
                        @if (count($modalidade->planos))
                            <div class="mb-3">
                                <strong>Duração dos planos associados à modalidade:</strong>
                                <ul class="list-unstyled">
                                    @foreach ($modalidade->planos as $plano)
                                        <li>{{ $plano->tipo_plano->nome . ' - ' . $plano->duracao_total . ' minutos' }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
            </div>





        </div>
    </div>
@endsection
