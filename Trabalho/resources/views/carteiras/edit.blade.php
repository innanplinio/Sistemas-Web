@extends('principal')

@section('titulo','Editar Carteira')

@section('conteudo')

    <form method="post" action="{{route('carteiras.update',$carteira->id)}}">
        @csrf
        @method('PATCH')
        <p>valor: <input type="text" name="valor" value = "{{$carteira->valor}}"></p>

        <input type="submit" name="btnsalvar" value="Salvar">

    </form>
@endsection