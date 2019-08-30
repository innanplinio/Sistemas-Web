@extends('inicio')

@section('titulo','Exibir Cliente')

@section('conteudo')

    <h1>Cliente: {{$cliente->nome}}</h1>
    <p>ID: {{$cliente->id}}</p>
    <p>Nome: {{$cliente->nome}}</p>


    {{-- voltar para a lista de estados --}}

    <a href={{route ('cliente.index')}}>Voltar</a>

    {{-- Editar o estado corrente --}}
    @if($user->email == 'administrador@gmail.com')
    <a href={{route ('cliente.edit', $cliente->id)}}>Editar</a>

    {{-- Excluir o estado corrente --}}

    <form method="post" action="{{route ('cliente.destroy',$cliente->id)}}" onsubmit="return confirm('Confirmar exclusão');">

        @csrf
        @method('DELETE')

        <input type="submit" value ="excluir">

    </form>
    @endif

@endsection