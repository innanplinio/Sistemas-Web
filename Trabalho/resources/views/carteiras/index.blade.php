@extends('principal')

@section('titulo','carteiras')

@section('conteudo')

    <a href="{{route ('carteiras.create')}}">Inserir</a>
    <table>
        <tr>
            <th>Código</th>
            <th>Valor</th>
            <th>User</th>
        </tr>
        @foreach ($carteira as $e)
            <tr>
                <td>{{ $e->id }}</td>
                <td><a href=" {{route ('carteiras.show',$e->id)}}">{{ $e->valor}}</a></td>
                <td><a href=" {{route ('carteiras.show',$e->id)}}">{{ $e->user_id}}</a></td>
                <td><a href=" {{route ('carteiras.show',$e->id)}}">Exibir</a></td>
            </tr>

        @endforeach
    </table>
@endsection