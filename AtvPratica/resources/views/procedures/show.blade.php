@extends('inicio')

@section('titulo','Exibir Cliente')

@section('conteudo')

    <h1>Procedimento: {{$procedure->name}}</h1>
    <p>Preço: {{$procedure->price}}</p>
    <p>Cliente: {{$procedure->user->name}}</p>


    {{-- voltar para a lista de estados --}}

    <a href={{route ('procedures.index')}}>Voltar</a>

    {{-- Editar o estado corrente --}}

    <a href={{route ('procedures.edit', $procedure->id)}}>Editar</a>

    {{-- Excluir o estado corrente --}}
    @if($user->type == 1)
    <form method="post" action="{{route ('procedures.destroy',$procedure->id)}}" onsubmit="return confirm('Confirmar exclusão');">

        @csrf
        @method('DELETE')

        <input type="submit" value ="excluir">

    </form>
    @endif

@endsection