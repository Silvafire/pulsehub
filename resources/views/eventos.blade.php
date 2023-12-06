@extends('layout.master')

@section('moreCSS')
    <link rel="stylesheet" href="...">

@endsection

@section('title', 'PulseHub')

@section('content')

    <div class="container mx-auto mt-8">
        <!-- Hero Section -->
        <div class="bg-gray-200 p-6 rounded-lg overflow-hidden relative">
            <img alt="Muscular Man Lifting Weights"
                class="absolute top-0 left-0 w-full h-full object-cover object-center opacity-70"
                src="{{ asset('img/eventoimg1.jpg') }}">
            <div class="relative z-10 text-white">
                <h1 class="text-4xl font-bold mb-3">
                    PULSEHUB
                </h1>
                <p class="mb-4">
                    A gym committed to a healthy and active lifestyle
                </p>
                <a
                    class="inline-block bg-primary-500 text-white py-2 px-4 rounded hover:bg-primary-600 transition duration-300">
                    Ver Mais
                </a>
            </div>
        </div>
        <!-- Classes Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-6" id="classes">
            @foreach ($events as $event)
                <!-- Weight Lifting Class -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img alt="Weight Lifting Class" class="w-full" src="https://random.imagecdn.app/1920/1080">
                    <div class="p-4">
                        <h2 class="text-xl font-bold">
                            Aula de pesos
                        </h2>
                        <p>{{ $event->nome }}</p>
                        <p>{{ $event->descricao }}</p>
                        <p>{{ $event->data }}</p>
                    </div>
                </div>
               <!-- Cardio Class 
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <img alt="Cardio Class" class="w-full" src="https://random.imagecdn.app/1920/1080">
            <div class="p-4">
                <h2 class="text-xl font-bold">
                    Cárdio
                </h2>
                <p>
                    Comeco: 17:25
                </p>
                <p>
                    Finalização: 18:25
                </p>
                <p>
                    Professor/a: Sofia
                </p>
            </div>
        </div>
         Yoga Class 
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <img alt="Yoga Class" class="w-full" src="https://random.imagecdn.app/1920/1080">
            <div class="p-4">
                <h2 class="text-xl font-bold">
                    Yoga
                </h2>
                <p>
                    Comeco: 14:10
                </p>
                <p>
                    Finalização: 15:10
                </p>
                <p>
                    Professor/a: Jason &amp; Carla
                </p>
            </div>
        </div> 
        </div> -->
    </div>
    @endforeach
@endsection

@section('moreScripts')
    <!-- opcional -->
    <script src="https://cdn.tailwindcss.com"></script>
@endsection
