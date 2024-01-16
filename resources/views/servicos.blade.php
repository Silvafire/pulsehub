@extends('layout.master')

@section('moreCSS')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/servicos.css') }}" />

@endsection

@section('title', 'Serviços')

@section('content')
    <!-- Hero -->
    <img class="bg-image" src="{{ asset('img/bannerservicos.jpg') }}"
        style="
        background-size: cover;
        object-fit: cover;
        height: 700px;
        width: 100%;
      ">
    <!-- Hero -->

    <main class="servicos">

        <div class="container-grid">
            @foreach ($services as $service)
                @if ($loop->iteration <= 3)
                    <div class="servicos-card">
                        <div class="img-card">
                            <img src="{{ asset('img/servicos (3).png') }}" alt="#">
                        </div>
                        <div class="servicos-tag">
                            <h5>{{ $service->nome }}</h5>
                            <p>{{ $truncated = Str::of($service->descricao)->limit(30) }}</p>
                        </div>
                        <a href="{{ route('servicosshow', $service) }}" class="d-flex justify-content-center"> <input
                                type="button" value="Ver Mais" class="btn-1 show-container"></a>
                    </div>
                @endif
            @endforeach
        </div>


        <img class="bg-image" src="{{ asset('img/dividerservicos.jpg') }}"
            style="
        background-size: cover;
        object-fit: cover;
        height: 600px;
        width: 100%;
        padding-top: 50px;
        padding-bottom: 50px;
      ">
    </main>

    <div class="container-grid">
        @foreach ($services as $service)
            @if ($loop->iteration > 3)
                <div class="servicos-card">
                    <div class="img-card">
                        <img src="{{ asset('img/servicos (3).png') }}" alt="#">
                    </div>
                    <div class="servicos-tag">
                        <h5>{{ $service->nome }}</h5>
                        <p>{{ $truncated = Str::of($service->descricao)->limit(30) }}</p>
                    </div>
                    <a href="{{ route('servicosshow', $service) }}" class="d-flex justify-content-center"> <input
                                type="button" value="Ver Mais" class="btn-1 show-container"></a>
                </div>
            @endif
        @endforeach
    </div>

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
                            container.scrollIntoView({
                                behavior: 'smooth'
                            });
                        }
                    }
                });
            });

            // Scroll to top functionality
            const backToTopButton = document.querySelector('.back-to-top');

            backToTopButton.addEventListener('click', function(event) {
                event.preventDefault(); // Prevents default behavior of the anchor tag
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                }); // Scrolls to the top of the page
            });
        });
    </script>
    <!-- <script src="{{ asset('js/modal.js') }}"></script> -->
@endsection
