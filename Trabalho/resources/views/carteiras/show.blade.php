@extends('principal')

@section('titulo','carteiras')

@section('conteudo')

    <h1>Carteira: {{$carteira->valor}}</h1>

    <p>Código: {{$carteira->id}}</p>
    <p>User: {{$carteira->user_id}}</p>


    {{--         voltar para a lista de estados--}}

    <a href={{route ('carteiras.index')}}>Voltar</a>

    {{--         Editar o estado corrente--}}

    <a href={{route ('carteiras.edit', $carteira->id)}}>Editar</a>

    {{--     Excluir o estado corrente --}}

    <form method="post" action="{{route ('carteiras.destroy',$carteira->id)}}" onsubmit="return confirm('Confirmar exclusão');">

        @csrf
        @method('DELETE')

        <input type="submit" value ="excluir">

    </form>

@endsection