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
            <input type="button" value="Ver Mais" class="btn-1 show-container" data-target="#container1">
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

@foreach($services as $service)
    @if($service)
    
        <div id="container1" class="container-md container-fluid hidden">
            
            <div class="container-title text-center">
                <h1>{{$service->nome}}</h1>
            </div>
            @foreach($service->images as $image)
            <img src="{{asset('storage/image_services/'. $image->imagem)}}" class="img-post" alt="">
            @endforeach
            <div class="container-body">
                <p>{{$service->descricao}}</p>
            </div>
            <input type="button" class="btn-2 back-to-top float-end" value="Voltar ao Topo"> 
        </div>
        
    @endif
@endforeach

@endsection

@section('moreScripts')
<!-- opcional -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const buttons = document.querySelectorAll('.show-container');
    
    buttons.forEach(button => {
        button.addEventListener('click', function() {
            const target = this.getAttribute('data-target');
            const container = document.querySelector(target);
            
            if (container) {
                container.classList.toggle('hidden');
                if (!container.classList.contains('hidden')) {
                    container.scrollIntoView({ behavior: 'smooth' });
                }
            }
        });
    });

    // Scroll to top functionality
    const backToTopButton = document.querySelector('.back-to-top');

    backToTopButton.addEventListener('click', function(event) {
        event.preventDefault(); // Prevents default behavior of the anchor tag
        window.scrollTo({ top: 0, behavior: 'smooth' }); // Scrolls to the top of the page
    });
});
</script>
<!-- <script src="{{ asset('js/modal.js') }}"></script> -->
@endsection