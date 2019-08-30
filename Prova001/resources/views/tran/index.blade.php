@extends('inicio')

@section('titulo','Inicio')

@section('conteudo')

    <h1>Transações: </h1>
    <form action ="{{route('select')}}", method="post">
        @csrf
    <p>Cliente : <select name="cliente_id">
            @foreach($cliente as $e)
                <option value="{{$e->id}}">{{$e->nome}}</option>
            @endforeach
        </select></p>

    {{--<table>
        <tr>
            <th>Código:  </th>
            <th>Cliente:  </th>
            <th>Tipo:  </th>
            <th>Data:  </th>
            <th>Valor:  </th>
            <th>Credito:  </th>
        </tr>
        @foreach ($tran as $e)
            <tr>
                <td><a href=" {{route ('tran.show',$e->id)}}">{{ $e->id }}</a></td>
                <td>{{ $e->cliente->nome }}</td>
                <td>{{ $e->tipo->nome }}</td>
                <td>{{ $e->data }}</td>
                <td>{{ $e->valor }}</td>
                <td>{{ $e->credito }}</td>
                <td><a href="{{route ('tran.show',$e->id)}}">Exibir</a></td>
            </tr>

        @endforeach
    </table><br>--}}

    <input type="submit" name="selection" value="Selecionar">

    </form>
    <br><br>
    <a href="/clientes">Voltar</a>
@endsection