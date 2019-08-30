@extends('inicio')

@section('titulo','Exibir Tipo')

@section('conteudo')

    <h1>Tipo: {{$tipo->nome}}</h1>
    <p>ID: {{$tipo->id}}</p>
    <p>Nome: {{$tipo->nome}}</p>


    {{-- voltar para a lista de estados --}}

    <a href={{route ('tipo.index')}}>Voltar</a>

    {{-- Editar o estado corrente --}}
    @if($user->email == 'administrador@gmail.com')
    <a href={{route ('tipo.edit', $tipo->id)}}>Editar</a>

    {{-- Excluir o estado corrente --}}

    <form method="post" action="{{route ('tipo.destroy',$tipo->id)}}" onsubmit="return confirm('Confirmar exclusão');">

        @csrf
        @method('DELETE')

        <input type="submit" value ="excluir">

    </form>
    @endif

@endsection