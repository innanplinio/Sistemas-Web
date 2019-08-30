@extends('inicio')

@section('titulo','Inicio')

@section('conteudo')

    <h1>Exames:</h1>
    @if($test->where('user.name','=',$user->name)->count() > 0)
    <table>
        <tr>
            <th>Código</th>
            <th>Cliente</th>
            <th>Procedimento</th>
            <th>Preço</th>
            <th>Data</th>

        </tr>
        @foreach ($test as $e)
            @if($e->user->name == $user->name)
            <tr>
                <td>{{ $e->id }}</td>
                <td><a href=" {{route ('tests.show',$e->id)}}">{{ $e->user->name }}</a></td>
                <td>{{$e->procedure->name}}</td>
                <td>{{$e->procedure->price}}</td>
                <td>{{$e->date}}</td>
                <td><a href="{{route ('tests.show',$e->id)}}">Exibir</a></td>
            </tr>
            @endif
        @endforeach
    </table><br><br>

    <p>Quantidade de Exames : {{$test->where('user.name','=',$user->name)->count()}}</p>
    <p>Valor Total : {{$test->where('user.name','=',$user->name)->sum('procedure.price')}}</p>
    <br>
    @else
        <p>Não existem exames cadastrados para este usuário</p>
    @endif
    <a href="/clientes">Voltar</a>
@endsection