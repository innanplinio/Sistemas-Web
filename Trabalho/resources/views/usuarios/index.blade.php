@extends('principal')

@section('titulo','usuarios')

@section('conteudo')

    <a href="{{route ('usuarios.create')}}">Inserir</a>
    <table>
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>email</th>
            <th>datanasc</th>
            <th>usuario</th>
            <th>senha</th>
            <th>heroi_id</th>
            <th>item_id</th>
        </tr>
        @foreach ($usuario as $e)
            <tr>
                <td>{{ $e->id }}</td>
                <td><a href=" {{route ('usuarios.show',$e->id)}}">{{ $e->nome }}</a></td>
                <td><a href=" {{route ('usuarios.show',$e->id)}}">{{ $e->email }}</a></td>
                <td><a href=" {{route ('usuarios.show',$e->id)}}">{{ $e->datanasc }}</a></td>
                <td><a href=" {{route ('usuarios.show',$e->id)}}">{{ $e->usuario }}</a></td>
                <td><a href=" {{route ('usuarios.show',$e->id)}}">{{ $e->password }}</a></td>
                <td><a href=" {{route ('usuarios.show',$e->id)}}">{{ $e->heroi_id }}</a></td>
                <td><a href=" {{route ('usuarios.show',$e->id)}}">{{ $e->item_id }}</a></td>
                <td><a href=" {{route ('usuarios.show',$e->id)}}">Exibir</a></td>
            </tr>

        @endforeach
    </table>
@endsection