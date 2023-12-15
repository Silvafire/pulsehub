@extends('layout.admin')

@section('content')
<div class="container-fluid">

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			Informação da Modalidade
		</div>
		<div class="card-body">

			<div><strong>Nome: </strong>{{$modalidade->nome}}</div>
            <div><strong>Descrição: </strong>{{$modalidade->descricao}}</div>
            <div><strong>Imagem: </strong><img height='80' src="{{asset('storage/modalidades_imagens/'. $modalidade->imagem )}}" alt="Imagem da modalidade"></div>
            <div><strong>Categoria: </strong>{{ $modalidade->tipo->nome}}</div>
            @if(count($modalidade->staff))
            <div><strong>Staff associado à modalidade: </strong>
                <ul>
                    @foreach($modalidade->staff as $membro)
                        <li>
                            {{$membro->nome . ' '. $membro->apelido }}
                        </li>
                    @endforeach
                </ul>
            </div>
            @endif

            @if(count($modalidade->planos))
            <div><strong>Planos associado à modalidade: </strong>
                <ul>
                    @foreach($modalidade->planos as $plano)
                        <li>
                            {{$plano->tipo_plano->nome . '-'. $plano->duracao_total }}
                        </li>
                    @endforeach
                </ul>
            </div>
            @endif
		</div>
	</div>
</div>
@endsection
