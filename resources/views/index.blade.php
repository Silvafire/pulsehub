@extends('layout.master')

@section('moreCSS')
    <link rel="stylesheet" href="{{ asset('css/home-page.css') }}">

@endsection

@section('title', 'PulseHub')

@section('content')
    <section class="home-hero">
        <div class="container flex-center gap-3">
            <div class="home-title">
                <h1>Inspiração e Motivação Pulse hub</h1>
            </div>
            <div class="hero-buttons">
                <a class="button" href="#">Subscrição</a>
                <a class="button outline" href="#"><img style="width: 25px; height:25px;"
                        src="{{ 'img/svg-branco-clip.svg' }}" alt="clip">Video</a>
            </div>
        </div>
    </section>

    <section class="services">
        <div class="container flex-center gap-4-5">
            <h2>Nossos Serviços</h2>
            <div class="grid-services">
                <div class="service-card">
                    <img src="{{ asset('img/condicionamento.svg') }}" alt="icon de corpo laranja">
                    <h5>condicionamento Físico</h5>
                    <p>Programas de condicionamento físico específicos para diferentes níveis de aptidão.</p>
                </div>

                <div class="service-card">
                    <img src="{{ asset('img/nutriºao.svg') }}" alt="icon de corpo laranja">
                    <h5>nutrição</h5>
                    <p>O Pulse Hub oferece serviços de aconselhamento nutricional.</p>
                </div>


                <div class="service-card">
                    <img src="{{ asset('img/desempenho.svg') }}" alt="icon de corpo laranja">
                    <h5>testes de desempenho</h5>
                    <p>Realizar avaliações físicas iniciais e periódicas para rastrear o progresso dos membros.</p>
                </div>


                <div class="service-card">
                    <img src="{{ asset('img/custom.svg') }}" alt="icon de corpo laranja">
                    <h5>plano PERSONALIZADO</h5>
                    <p>Planos de treino ajustados aos objetivos pessoais.</p>
                </div>
            </div>
        </div>
    </section>

    <main>
        <section class="modalidades">
            <div class="container-modalidades">
                <div class="modalidades-title">
                    <img src="{{ asset('img/logo-outline.svg') }}" alt="logo pulse hub outline">
                    <h2>Modalidades</h2>
                </div>
                <div class="modalidades-grid">
                    <div class="modalidade-card">
                        <div class="card-container">
                            <div class="card-title">
                                <img class="logo-outline-card" src="{{ asset('img/outline-white.svg') }}"
                                    alt="logo outline">
                                <h3>Box</h3>
                            </div>
                            <div class="card-price">
                                <p>Desde</p>
                                <span>55€</span>
                            </div>
                            <button class="button-cta">Inscrever</button>
                        </div>
                    </div>

                    <div class="modalidade-card" data-item-image="jujitsu">
                        <div class="card-container">
                            <div class="card-title">
                                <img class="logo-outline-card" src="{{ asset('img/outline-white.svg') }}"
                                    alt="logo outline">
                                <h3>Box</h3>
                            </div>
                            <div class="card-price">
                                <p>Desde</p>
                                <span>55€</span>
                            </div>
                            <button class="button-cta">Inscrever</button>
                        </div>
                    </div>

                    <div class="modalidade-card">
                        <div class="card-container">
                            <div class="card-title">
                                <img class="logo-outline-card" src="{{ asset('img/outline-white.svg') }}"
                                    alt="logo outline">
                                <h3>Box</h3>
                            </div>
                            <div class="card-price">
                                <p>Desde</p>
                                <span>55€</span>
                            </div>
                            <button class="button-cta">Inscrever</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="membership">
            <div class="container-mambership">
                <h2>Subscrições</h2>
                <div class="card-sub">
                    <div class="card-sub-content">
                        <h3>Acesso Total</h3>
                        <ul>
                            <li>Acesso Total</li>
                        </ul>
                        <span>35€/Mês</span>
                        <button class="cta-sub">Subscrever</button>
                    </div>
                </div>

                <div class="card-sub">
                    <div class="card-sub-content">
                        <h3>3x week plan</h3>
                        <ul>
                            <li>3X Por Semana </li>
                        </ul>
                        <span>25€/Mês</span>
                        <button class="cta-sub">Subscrever</button>
                    </div>
                </div>

                <div class="card-sub">
                    <div class="card-sub-content">
                        <h3>ANUAL</h3>
                        <ul>
                            <li>Acesso Total</li>
                        </ul>
                        <span>400€/Anual</span>
                        <button class="cta-sub">Subscrever</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="staff">
            <div class="container-staff">
                <h2>STAFF</h2>
                <div class="container-grid">
                    @if (count($staffs) > 0)

                    @foreach ($staffs->sortByDesc('created_at')->take(4) as $staff)
                            <div class="staff-card">
                                <div class="img-card">
                                    <img src="{{ asset('storage/staff_imagens/' . $staff->img) }}" alt="Staff imagem pessoal">
                                </div>
                                <div class="staff-tag">
                                    <h5>{{ $staff->nome }}</h5>
                                    @foreach ($staff->modalidades as $modalidade)
                                    <p>{{ $modalidade->nome }}</p>
                                   @endforeach
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
            </div>
        </section>
        <section class="loja">
            <div class="container-loja">
                <h2>Visita a nossa loja</h2>
                <buttton class="loja-cta"> Compra Agora! </buttton>
            </div>
        </section>
    </main>
@endsection

@section('moreScripts')
    <!-- opcional -->
@endsection
