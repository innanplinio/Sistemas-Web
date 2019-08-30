@extends('principal')

@section('titulo','usuarios')

@section('conteudo')

    <h1>Regiao: {{$usuario->nome}}</h1>

    <p>Código: {{$usuario->id}}</p>
    <p>Nome: {{$usuario->nome}}</p>
    <p>data: {{$usuario->datanasc}}</p>
    <p>usuario: {{$usuario->usuario}}</p>
    <p>senha: {{$usuario->password}}</p>
    <p>heroi: {{$usuario->heroi_id}}</p>
    <p>item: {{$usuario->item_id}}</p>


    {{--         voltar para a lista de estados--}}

    <a href={{route ('usuarios.index')}}>Voltar</a>

    {{--         Editar o estado corrente--}}

    <a href={{route ('usuarios.edit', $usuario->id)}}>Editar</a>

    {{--     Excluir o estado corrente --}}

    <form method="post" action="{{route ('usuarios.destroy',$usuario->id)}}" onsubmit="return confirm('Confirmar exclusão');">

        @csrf
        @method('DELETE')

        <input type="submit" value ="excluir">

    </form>

@endsection