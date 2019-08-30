@extends('inicio')

@section('titulo','Exibir Cliente')

@section('conteudo')

    <h1>Cliente: {{$test->user->name}}</h1>
    <p>Procedimento: {{$test->procedure->name}}</p>
    <p>Data: {{$test->date}}</p>


    {{-- voltar para a lista de estados --}}

    <a href={{route ('tests.index')}}>Voltar</a>

    {{-- Editar o estado corrente --}}

    <a href={{route ('tests.edit', $test->id)}}>Editar</a>

    {{-- Excluir o estado corrente --}}

    <form method="post" action="{{route ('tests.destroy',$test->id)}}" onsubmit="return confirm('Confirmar exclusão');">

        @csrf
        @method('DELETE')

        <input type="submit" value ="excluir">

    </form>

@endsection