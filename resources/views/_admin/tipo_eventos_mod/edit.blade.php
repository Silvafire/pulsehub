@extends('layout.admin')

@section('content')
    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                Editar tipo eventos/modalidades
            </div>
            <div class="card-body">

                <form method="POST" action="{{ route('admin.tipo_eventos_mod.update', $tipo_eventos_mod) }}"
                    class="form-group" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    @include('_admin.tipo_eventos_mod.partials.add-edit')
                    <div class="form-group">
                        <button type="submit" class="btn btn-success" name="ok">Guardar</button>

                        <a href="{{ route('admin.tipo_eventos_mod.index') }}" class="btn btn-default">Cancelar</a>

                    </div>

                </form>

            </div>
        </div>
    </div>
@endsection
