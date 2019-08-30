@extends('inicio')

@section('titulo','Inicio')

@section('conteudo')

    <h1>Clientes:</h1>
    <table>
        <tr>
            <th>Código</th>
            <th>Nome</th>

        </tr>
        @foreach ($cliente as $e)
            <tr>
                <td>{{ $e->id }}</td>
                <td><a href=" {{route ('cliente.show',$e->id)}}">{{ $e->nome }}</a></td>
                <td><a href="{{route ('cliente.show',$e->id)}}">Exibir</a></td>
            </tr>

        @endforeach
    </table>
    <a href="/geral">Voltar</a>
@endsection