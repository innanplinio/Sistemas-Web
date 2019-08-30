@extends('inicio')

@section('titulo','Transações')

@section('conteudo')

    <form method="post" action="{{route('tran.store')}}">
        @csrf
        <p>Cliente :</p>
        <select name="cliente_id">
            @foreach($cliente as $e)
                <option value="{{$e->id}}">{{$e->nome}}</option>
                @endforeach
        </select>
        <p>Tipo :</p>
        <select name="tipo_id">
            @foreach($tipo as $e)
                <option value="{{$e->id}}">{{$e->nome}}</option>
            @endforeach
        </select>
        <p>Data : <input type="text" name="data"></p>
        <p>Valor : <input type="text" name="valor"></p>
        <p>Credito : <input type="radio" name="credito" value="0">Débito<input type="radio" name="credito" value="1"> Crédito</p>
        <input type="submit" name="btnsalvar" value="Incluir">
    </form>



@endsection