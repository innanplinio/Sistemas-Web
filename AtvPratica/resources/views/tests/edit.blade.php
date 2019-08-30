@extends('inicio')

@section('titulo','Editar Cliente')

@section('conteudo')

    <h1>Editar Exame:</h1>
    <form method="post" action="{{route('tests.update',$test->id)}}">
        @csrf
        @method('PATCH')
        <p>Cliente:</p>
        <select name="user_id">
            @foreach($user as $e)
                <option value="{{$e->id}}" selected="{{$test->user_id}}">{{$e->name}}</option>
            @endforeach
        </select><br><br>
        <p>Procedimento:</p>
        <select name="procedure_id">
            @foreach($procedure as $e)
                <option value="{{$e->id}}" selected="{{$test->user_id}}">{{$e->name}}</option>
            @endforeach
        </select><br><br>
        <p>Data: <input type="date" name="date" value="{{$test->date}}"></p>
            <input type="submit" name="btnsalvar" value="Salvar">

    </form>
@endsection