@extends('inicio')

@section('titulo','Inicio')

@section('conteudo')

    <h1>Tipos de Transações:</h1>
    <table>
        <tr>
            <th>Código</th>
            <th>Nome</th>

        </tr>
        @foreach ($tipo as $e)
            <tr>
                <td>{{ $e->id }}</td>
                <td><a href=" {{route ('tipo.show',$e->id)}}">{{ $e->nome }}</a></td>
                <td><a href="{{route ('tipo.show',$e->id)}}">Exibir</a></td>
            </tr>

        @endforeach
    </table>
    <a href="/geral">Voltar</a>
@endsection