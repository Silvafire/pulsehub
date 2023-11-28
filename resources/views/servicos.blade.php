@extends('layout.master')

@section('moreCSS')
<link rel="stylesheet" type="text/css" href="{{ asset('css/servicos.css') }}" />

@endsection

@section('title','Serviços')

@section('content')
<!-- Hero -->
<img class="bg-image" src="{{ asset('img/bannerservicos.jpg') }}" style="
        background-size: cover;
        object-fit: cover;
        height: 700px;
        width: 100%;
      ">
<!-- Hero -->

<main class="servicos">
    <div class="container-grid">
        <div class="servicos-card">
            <div class="img-card">
                <img src="{{asset('img/servicos (3).png')}}" alt="#">
            </div>
            <div class="servicos-tag">
                <h5>AVALIAÇÃO FÍSICA</h5>
                <p>Proporcionamos uma avaliação física inicial gratuita com a inscrição.</p>
            </div>
            <input type="button" value="Ver Mais" class="btn-1" data-bs-toggle="modal" data-bs-target="#modal1">

        </div>

        <div class="servicos-card">
            <div class="img-card">
                <img src="{{asset('img/servicos (2).png')}}" alt="#">
            </div>
            <div class="servicos-tag">
                <h5>GESTOR DE TREINO</h5>
                <p>Gere o teu treino com a nossa aplicação para o telemóvel.</p>
            </div>
            <input type="button" value="Ver Mais" class="btn-1" data-bs-toggle="modal" data-bs-target="#modal2">
        </div>

        <div class="servicos-card">
            <div class="img-card">
                <img src="{{asset('img/servicos (1).png')}}" alt="#">
            </div>
            <div class="servicos-tag">
                <h5>AULAS DE GRUPO</h5>
                <p>Aulas de grupo diversas, caso estejas a precisar de um levantamento de energias.</p>
            </div>
            <input type="button" value="Ver Mais" class="btn-1" data-bs-toggle="modal" data-bs-target="#modal3">
        </div>
    </div>

    <img class="bg-image" src="{{ asset('img/dividerservicos.jpg') }}" style="
        background-size: cover;
        object-fit: cover;
        height: 600px;
        width: 100%;
        padding-top: 50px;
        padding-bottom: 50px;
      ">



    <div class="container-grid">
        <div class="servicos-card">
            <div class="img-card">
                <img src="{{asset('img/servicos (6).png')}}" alt="#">
            </div>
            <div class="servicos-tag">
                <h5>ACOMPANHAMENTO NUTRICIONAL</h5>
                <p>Acompanhamento nutricional mensal, com a primeira consulta grátis com a inscrição.</p>
            </div>
            <input type="button" value="Ver Mais" class="btn-1" data-bs-toggle="modal" data-bs-target="#modal4">
        </div>

        <div class="servicos-card">
            <div class="img-card">
                <img src="{{asset('img/servicos (5).png')}}" alt="#">
            </div>
            <div class="servicos-tag">
                <h5>TREINO PERSONALIZADO</h5>
                <p>Personaliza o teu treino à tua maneira. Oferecemos também várias escolhas predefinidas</p>
            </div>
            <input type="button" value="Ver Mais" class="btn-1" data-bs-toggle="modal" data-bs-target="#modal5">
        </div>

        <div class="servicos-card">
            <div class="img-card">
                <img src="{{asset('img/servicos (4).png')}}" alt="#">
            </div>
            <div class="servicos-tag">
                <h5>TESTES DE DESEMPENHO</h5>
                <p>Realiza avaliações físicas iniciais e periódicas para rastreares o teu progresso.</p>
            </div>
            <input type="button" value="Ver Mais" class="btn-1" data-bs-toggle="modal" data-bs-target="#modal6">
        </div>
    </div>
</main>

<!-- Modal -->
@foreach($services as $service)
<div class="modal" id="modal1" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{$service->nome}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>{{$service->descricao}}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<div class="modal" id="modal2" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">GESTOR DE TREINO</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Modal body text goes here.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<div class="modal" id="modal3" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">AULAS DE GRUPO</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Modal body text goes here.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<div class="modal" id="modal4" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">ACOMPANHAMENTO NUTRICIONAL</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Modal body text goes here.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<div class="modal" id="modal5" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">TREINO PERSONALIZADO</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Modal body text goes here.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<div class="modal" id="modal6" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">TESTES DE DESEMPENHO</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Modal body text goes here.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection

@section('moreScripts')
<!-- opcional -->

<script src="{{ asset('js/modal.js') }}"></script>
@endsection