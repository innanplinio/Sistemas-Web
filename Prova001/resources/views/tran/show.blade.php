@extends('inicio')

@section('titulo','Exibir Transação')

@section('conteudo')

    <h1>Transação: {{$tran->id}}</h1>
    <p>Nome Cliente: {{$tran->cliente->nome}}</p>
    <p>Tipo:{{$tran->tipo->nome}}</p>
    <p>Data: {{$tran->data}}</p>
    <p>Valor: {{$tran->valor}}</p>
    <p>Credito: {{$tran->credito}}</p>


    {{-- voltar para a lista de estados --}}
    <a href={{route ('tran.index')}}>Voltar</a>

    {{-- Editar o estado corrente --}}
    @if($user->email == 'administrador@gmail.com')
    <a href={{route ('tran.edit', $tran->id)}}>Editar</a>
    {{-- Excluir o estado corrente --}}

    <form method="post" action="{{route ('tran.destroy',$tran->id)}}" onsubmit="return confirm('Confirmar exclusão');">

        @csrf
        @method('DELETE')
        <input type="submit" value ="excluir">

    </form>
    @endif
@endsection