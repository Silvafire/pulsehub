@extends('layout.master')

@section('moreCSS')
    <link rel="stylesheet" href="{{asset('css/staff-style.css')}}">
@endsection

@section('title', 'Staff')

@section('content')
    <section class="hero">

        <div class="container">
            <h1>STAFF</h1>
        </div>
    </section>

    <main class="staff">
        <div class="container-grid">
        @if(count($staffs) > 0)
        @foreach($staffs as $staff)
            <div class="staff-card">
                <div class="img-card">
                <img src="{{ asset('storage/staff_imagens/' . $staff->img) }}" alt="Staff imagem pessoal">
                </div>
                <div class="staff-tag">
                    <h5>{{ $staff->nome }}</h5>
                    <p>{{ $staff->especializacao }}</p>
                </div>
                <div class="social-media">
                    <a href="{{ $staff->link_email }}"><img src="{{asset('img/email.svg')}}" alt="email icon"></a>
                    <a href="{{ $staff->link_instagram }}"><img src="{{asset('img/insta.svg')}}" alt="instagram icon"></a>
                    <a href="{{ $staff->link_facebook }}"><img src="{{asset('img/facebook.svg')}}" alt="facebook icon"></a>
                </div>
            </div>

            @endforeach
            @else
            <h1 class="erro-message">Não existem staffs</h1>
        @endif
        </div>
    </main>
@endsection

@section('moreScripts')
    <!-- opcional -->
@endsection
