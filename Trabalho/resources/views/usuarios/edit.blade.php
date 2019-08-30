@extends('principal')

@section('titulo','Editar usuario')

@section('conteudo')

    <form method="post" action="{{route('usuarios.update',$usuario->id)}}">
        @csrf
        @method('PATCH')
        <p>Nome: <input type="text" name="nome" value = "{{$usuario->nome}}"></p>
        <p>tipo: <input type="text" name="email" value = "{{$usuario->email}}"></p>
        <p>classe: <input type="text" name="datanasc" value = "{{$usuario->datanasc}}"></p>
        <p>price: <input type="text" name="usuario" value = "{{$usuario->usuario}}"></p>
        <p>gameprice: <input type="text" name="password" value = "{{$usuario->password}}"></p>
        <p>gameprice: <input type="text" name="heroi_id" value = "{{$usuario->heroi_id}}"></p>
        <p>gameprice: <input type="text" name="item_id" value = "{{$usuario->item_id}}"></p>
        <input type="submit" name="btnsalvar" value="Salvar">

    </form>
@endsection
