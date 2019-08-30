@extends('inicio')

@section('titulo','Inicio')

@section('conteudo')

    <h1>Procedimentos:</h1>
    @if($procedure->count() > 0)
    <table>
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Cliente</th>

        </tr>
        @foreach ($procedure as $e)
            <tr>
                <td>{{ $e->id }}</td>
                <td>{{ $e->name }}</td>
                <td>{{$e->price}}</td>
                <td>{{$e->user->name}}</td>
                @if($user->type != 3)
                <td><a href="{{route ('procedures.show',$e->id)}}">Exibir</a></td>
                @endif
            </tr>

        @endforeach
    </table><br>
    @else
        <a>Não existem procedimentos cadastrados</a><br><br>
    @endif
    <a href="/geral">Voltar</a>
@endsection