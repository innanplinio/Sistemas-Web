@extends('inicio')

@section('titulo','Inicio')

@section('conteudo')

    <h1>Transações: </h1>

    {{--<p>Cliente : <select name="selectClient">
            @foreach($cliente as $e)
                <option value="{{$e->id}}">{{$e->nome}}</option>
            @endforeach
        </select></p>--}}

    <table>
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
                @if($e->credito == 1)
                    <td>Credito</td>
                @endif
                @if($e->credito == 0)
                    <td>Debito</td>
                @endif
                <td><a href="{{route ('tran.show',$e->id)}}">Exibir</a></td>
            </tr>

        @endforeach
    </table><br>
    <p>Credito : {{$tran->where('credito','=','1')->sum('valor')}}</p>
    <p>Debito : {{$tran->where('credito','=','0')->sum('valor')}}</p>
    <p>Saldo : {{$tran->where('credito','=','1')->sum('valor') - $tran->where('credito','=','0')->sum('valor')}}</p>

    <a href ="/tran/create">Inserir Nova Transação</a><br>
    <a href="/tran">Voltar</a>

@endsection