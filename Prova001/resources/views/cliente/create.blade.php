@extends('inicio')

@section('titulo','Cliente')

@section('conteudo')

    <h1>Novo Cliente:</h1>
    <form method="post" action="{{route('cliente.store')}}">
        @csrf
        <p>Nome : <input type="text" name="nome"></p>
            <input type="submit" name="btnsalvar" value="Incluir">

    </form>



@endsection