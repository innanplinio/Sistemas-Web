@extends('inicio')

@section('titulo','Editar Cliente')

@section('conteudo')

    <h1>Editar Cliente:</h1>
    <form method="post" action="{{route('cliente.update',$cliente->id)}}">
        @csrf
        @method('PATCH')
        <p>Nome: <input type="text" name="nome" value = "{{$cliente->nome}}"></p>
            <input type="submit" name="btnsalvar" value="Salvar">

    </form>
@endsection