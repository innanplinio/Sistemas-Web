@extends('inicio')

@section('titulo','Editar Transação')

@section('conteudo')

    <h1>Editar Transação:</h1>
    <form method="post" action="{{route('tran.update',$tran->id)}}">
        @csrf
        @method('PATCH')
       {{-- <p>Cliente: <input type="text" name="cliente_id" value = "{{$tran->cliente_id}}"></p>
        <p>Tipo: <input type="text" name="tipo_id" value = "{{$tran->tipo_id}}"></p>--}}

        <p>Cliente :</p>
        <select name="cliente_id">
            @foreach($cliente as $e)
                <option value="{{$e->id}}" selected ="{{$tran->cliente_id}}">{{$e->nome}}</option>
            @endforeach
        </select>
        <p>Tipo :</p>
        <select name="tipo_id">
            @foreach($tipo as $e)
                <option value="{{$e->id}}"selected ="{{$tran->tipo_id}}">{{$e->nome}}</option>
            @endforeach
        </select>
        <p>Data: <input type="text" name="data" value = "{{$tran->data}}"></p>
        <p>Valor: <input type="text" name="valor" value = "{{$tran->valor}}"></p>
        <p>Credito: <input type="text" name="credito" value = "{{$tran->credito}}"></p>
        <input type="submit" name="btnsalvar" value="Salvar">

    </form>
@endsection