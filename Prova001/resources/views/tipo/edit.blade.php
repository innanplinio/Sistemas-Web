@extends('inicio')

@section('titulo','Editar Tipo')

@section('conteudo')

    <h1>Editar Tipo:</h1>
    <form method="post" action="{{route('tipo.update',$tipo->id)}}">
        @csrf
        @method('PATCH')
        <p>Nome: <input type="text" name="nome" value = "{{$tipo->nome}}"></p>
        <input type="submit" name="btnsalvar" value="Salvar">

    </form>
@endsection