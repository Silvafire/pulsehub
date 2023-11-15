@extends('layout.master')

@section('moreCSS')
<link rel="stylesheet" href="{{asset('css/blog.css')}}">
@endsection

@section('title','Blog')

@section('content')

<div class="banner">
    <div class="content">
        <div class="title">BLOG</div>
        <div class="subtitle">EXPLORE OS BASTIDORES DO SUCESSO FITNESS NO NOSSO BLOG.</div>
    </div>
</div>

<section id="main1">
    <div id="post1">
        <img src="img/consistenciaobjetivos.jpg" alt="Consistência Objetivos" id="imgpost1">
        <div id="infopost1">
            <h6 id="nomepost1">DA CONSISTÊNCIA AOS TEUS OBJETIVOS</h6>
            <div class="divisorbloco">
                <div class="linha"></div>
            </div>
            <div id="descricaopost1">
                <p>Na jornada fitness, a consistência é a chave que desbloqueia as portas dos teus objetivos.
                    Comprometa-se a cada treino, pois é a regularidade que transforma metas em conquistas duradouras.</p>
            </div>
            <a href="#" class="vermais1">Ver mais ></a>
        </div>
    </div>
    </section>

<section id="main2">
<div id="post2">
    <div id="infopost2">
        <h6 id="nomepost2">5 MOTIVOS PARA TREINAR COM UM PERSONAL TRAINER</h6>
        <div class="divisorbloco">
            <div class="linha"></div>
        </div>
        <div id="descricaopost2">
            <p>Seja desafiado, seja motivado: os motivos essenciais para ter um personal trainer ao seu lado.</p>
        </div>
        <a href="#" class="vermais2">Ver mais ></a>
    </div>
    <img src="img/personaltrainer.jpg" alt="Personal Trainer" id="imgpost2">
</div>
</section>

<section id="main3">
    <div id="post3">
        <img src="img/transpirartreino.jpg" alt="Transpirar Treino" id="imgpost3">
        <div id="infopost3">
            <h6 id="nomepost3">TRANSPIRAR MUITO DURANTE O TREINO SIGNIFICA PERCA DE PESO?</h6>
            <div class="divisorbloco">
                <div class="linha"></div>
            </div>
            <div id="descricaopost3">
                <p>Descubra a verdade sobre a transpiração intensa: nem sempre está ligada à perda de peso.</p>
            </div>
            <a href="#" class="vermais3">Ver mais ></a>
        </div>

    </div>
</section>

<section id="main4">
    <div id="post4">
        <div id="infopost4">
            <h6 id="nomepost4">BODY PUMP: CONFERE OS BENEFÍCIOS</h6>
            <div class="divisorbloco">
                <div class="linha"></div>
            </div>
            <div id="descricaopost4">
                <p>Estás à procura de uma maneira de esculpir o corpo, ganhar força e ainda te divertires? O Body Pump é a solução para ti.</p>
            </div>
            <a href="#" class="vermais4">Ver mais ></a>
        </div>
        <img src="img/bodypump.jpg" alt="BodyPump" id="imgpost4">
    </div>
    </section>

<section id="main5">
    <div id="post5">
        <img src="img/fisioterapia.jpg" alt="Fisioterapia" id="imgpost5">
        <div id="infopost5">
            <h6 id="nomepost5">A IMPORTÂNCIA DA FISIOTERAPIA NA PRÁTICA DESPORTIVA</h6>
            <div class="divisorbloco">
                <div class="linha"></div>
            </div>
            <div id="descricaopost5">
                <p>Explore o papel vital da fisioterapia na prevenção de lesões e no aprimoramento do rendimento desportivo.</p>
            </div>
            <a href="#" class="vermais5">Ver mais ></a>
        </div>
    </div>
</section>

<div id="container">
<a href="#" class="mostrarmais">EXPERIMENTE GRÁTIS</a>
</div>

@endsection

@section('moreScripts')
<!-- opcional -->
@endsection
