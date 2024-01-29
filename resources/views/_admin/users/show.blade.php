@extends('layout.admin')

@section('content')
    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                Informação do Utilizador
            </div>
            <div class="card-body">

                <div class="row">
                    <div class="col-md-3 text-center mb-3">
                        <img class="rounded-circle" alt="Foto" src="{{asset('storage/users_fotos/'. $user->img)}}" height="80">
                        <div class="mt-2"><strong>Nome: </strong>{{$user->name}}</div>
                    </div>

                    <div class="col-md-9">
                        <div class="mb-2"><strong>E-mail: </strong>{{$user->email}}</div>
                        <div class="mb-2"><strong>Data de nascimento: </strong>{{$user->data_nasc}}</div>

                        <div class="mb-2">
                            <strong>Role: </strong>
                            <span class="badge {{ $user->roleToStr() == 'Admin' ? 'bg-danger text-white' : 'bg-primary text-white' }}">
                                {{$user->roleToStr()}}
                            </span>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
