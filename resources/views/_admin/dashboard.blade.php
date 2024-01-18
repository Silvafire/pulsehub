@extends('layout.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <div class="card shadow">
                    <div class="card-header p-4">
                        <h1 style="display:inline;"> {{ $count_users }} </h1>
                        <h3 style="display:inline;"> Utilizadores </h3>
                    </div>
                    <div class="card-body">
                        @foreach ($count_users_per_role as $item)
                            <p>{{ $item->roleToStr() }}: {{ $item->count }} utilizadores</p>
                        @endforeach
                    </div>
                </div>

            </div>
            <div class="col-3">
                <div class="card shadow">
                    <div class="card-header p-4">
                        <h1 style="display:inline;"> {{ $count_events }} </h1>
                        <h3 style="display:inline;"> Eventos </h3>
                    </div>
                    <div class="card-body">
                        @foreach ($count_events_per_type as $item)
                            <p> {{ $item->tipo->nome }}: {{ $item->count }} Eventos</p>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card shadow">
                    <div class="card-header p-4">
                        <h1 style="display:inline;"> {{ $count_modalidades }} </h1>
                        <h3 style="display:inline;"> Modalidades </h3>
                    </div>
                    <div class="card-body">
                        @foreach ($count_mod_per_type as $item)
                            <p>{{ $item->tipo->nome }} : {{ $item->count }} Modalidades</p>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card shadow">
                    <div class="card-header p-4">
                        <h1 style="display:inline;"> {{ $count_services }} </h1>
                        <h3 style="display:inline;"> Serviços </h3>
                    </div>
                    <div class="card-body">
                        @foreach ($count_services_per_image as $item)
                            <p>{{ $item->service->nome }} : {{ $item->count }} Imagens</p>
                        @endforeach
                    </div>
                </div>
            </div>
         {{--    <div class="col-3">
                <div class="card shadow">
                    <div class="card-header p-4">
                        <h1 style="display:inline;"> {{ $count_services }} </h1>
                        <h3 style="display:inline;"> Serviços </h3>
                    </div>
                    <div class="card-body">
                        @foreach ($count_services_per_image as $item)
                        <p>{{ $item  }} :{{ $item->count }} Imagens</p>

                        @endforeach
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
@endsection
