@extends('principal')

@section('titulo','Carteira')

@section('conteudo')

    <form method="post" action="{{route('carteiras.store')}}">
        @csrf
        <p>Nome: <input type="text" name="valor"></p>
        <p>User: <input type="text" name="user_id"></p>
        <input type="submit" name="btnsalvar" value="Incluir">

    </form>



@endsection