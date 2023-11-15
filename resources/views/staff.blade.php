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
            <div class="staff-card">
                <div class="img-card">
                    <img src="{{asset('img/sandra-staff.png')}}" alt="staff iamgem pessoal">
                </div>
                <div class="staff-tag">
                    <h5>Sandra Silva</h5>
                    <p>Nutricionista</p>
                </div>
                <div class="social-media">
                    <a href="#"><img src="{{asset('img/email.svg')}}" alt="email icon"></a>
                    <a href="#"><img src="{{asset('img/insta.svg')}}" alt="instagram icon"></a>
                    <a href="#"><img src="{{asset('img/facebook.svg')}}" alt="facebook icon"></a>
                </div>
            </div>

            <div class="staff-card">
                <div class="img-card">
                    <img src="{{asset('img/sandra-staff.png')}}" alt="staff iamgem pessoal">
                </div>
                <div class="staff-tag">
                    <h5>Sandra Silva</h5>
                    <p>Nutricionista</p>
                </div>
                <div class="social-media">
                    <a href="#"><img src="{{asset('img/email.svg')}}" alt="email icon"></a>
                    <a href="#"><img src="{{asset('img/insta.svg')}}" alt="instagram icon"></a>
                    <a href="#"><img src="{{asset('img/facebook.svg')}}" alt="facebook icon"></a>
                </div>
            </div>

            <div class="staff-card">
                <div class="img-card">
                    <img src="{{asset('img/sandra-staff.png')}}" alt="staff iamgem pessoal">
                </div>
                <div class="staff-tag">
                    <h5>Sandra Silva</h5>
                    <p>Nutricionista</p>
                </div>
                <div class="social-media">
                    <a href="#"><img src="{{asset('img/email.svg')}}" alt="email icon"></a>
                    <a href="#"><img src="{{asset('img/insta.svg')}}" alt="instagram icon"></a>
                    <a href="#"><img src="{{asset('img/facebook.svg')}}" alt="facebook icon"></a>
                </div>
            </div>

            <div class="staff-card">
                <div class="img-card">
                    <img src="{{asset('img/sandra-staff.png')}}" alt="staff iamgem pessoal">
                </div>
                <div class="staff-tag">
                    <h5>Sandra Silva</h5>
                    <p>Nutricionista</p>
                </div>
                <div class="social-media">
                    <a href="#"><img src="{{asset('img/email.svg')}}" alt="email icon"></a>
                    <a href="#"><img src="{{asset('img/insta.svg')}}" alt="instagram icon"></a>
                    <a href="#"><img src="{{asset('img/facebook.svg')}}" alt="facebook icon"></a>
                </div>
            </div>

            <div class="staff-card">
                <div class="img-card">
                    <img src="{{asset('img/sandra-staff.png')}}" alt="staff iamgem pessoal">
                </div>
                <div class="staff-tag">
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
