@extends('inicio')

@section('titulo','Tipo')

@section('conteudo')

    <h1>Novo usuário:</h1>
    <form method="post" action="{{route('tipo.store')}}">
        @csrf
        <p>Nome : <input type="text" name="nome"></p>
        <input type="submit" name="btnsalvar" value="Incluir">

    </form>



@endsection