@extends('layout.master')

@section('moreCSS')
<link rel="stylesheet" type="text/css" href="{{ asset('css/servicos.css') }}" />

@endsection

@section('title','Serviços')

@section('content')
<!-- Hero -->
<img class="p-5 text-center bg-image" src="{{ asset('img/bannerservicos.jpg') }}" style="
        background-size: cover;
        height: 700px;
        width: 100%;
      ">
</img>
<!-- Hero -->

<main class="servicos">
    <div class="container-grid">
        <div class="servicos-card">
            <div class="img-card">
                <img src="{{asset('img/sandra-staff.png')}}" alt="#">
            </div>
            <div class="servicos-tag">
                <h5>Sandra Silva</h5>
                <p>Nutricionista</p>
            </div>
            <div class="social-media">
                <a href="#"><img src="{{asset('img/email.svg')}}" alt="email icon"></a>
                <a href="#"><img src="{{asset('img/insta.svg')}}" alt="instagram icon"></a>
                <a href="#"><img src="{{asset('img/facebook.svg')}}" alt="facebook icon"></a>
            </div>
        </div>

        <div class="servicos-card">
            <div class="img-card">
                <img src="{{asset('img/sandra-staff.png')}}" alt="#">
            </div>
            <div class="servicos-tag">
                <h5>Sandra Silva</h5>
                <p>Nutricionista</p>
            </div>
            <div class="social-media">
                <a href="#"><img src="{{asset('img/email.svg')}}" alt="email icon"></a>
                <a href="#"><img src="{{asset('img/insta.svg')}}" alt="instagram icon"></a>
                <a href="#"><img src="{{asset('img/facebook.svg')}}" alt="facebook icon"></a>
            </div>
        </div>

        <div class="servicos-card">
            <div class="img-card">
                <img src="{{asset('img/sandra-staff.png')}}" alt="#">
            </div>
            <div class="servicos-tag">
                <h5>Sandra Silva</h5>
                <p>Nutricionista</p>
            </div>
            <div class="social-media">
                <a href="#"><img src="{{asset('img/email.svg')}}" alt="email icon"></a>
                <a href="#"><img src="{{asset('img/insta.svg')}}" alt="instagram icon"></a>
                <a href="#"><img src="{{asset('img/facebook.svg')}}" alt="facebook icon"></a>
            </div>
        </div>
    </div>
</main>

@endsection

@section('moreScripts')
<!-- opcional -->
@endsection