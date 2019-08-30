@extends('inicio')

@section('titulo','Cliente')

@section('conteudo')

    <h1>Novo Exame:</h1>
    <form method="post" action="{{route('tests.store')}}">
        @csrf
        <p>Cliente : <select name="user_id">
                @foreach($user as $e)
                    @if($e->name == $user2->name)
                    <option value="{{$e->id}}">{{$e->name}}</option>
                    @endif
                @endforeach
            </select></p>
        <p>Procedimento: <select name="procedure_id">
                @foreach($procedure as $e)
                    <option value="{{$e->id}}">{{$e->name}}</option>
                @endforeach
            </select></p>
        <p>Data: <input type="date" name="date"></p>
            <input type="submit" name="btnsalvar" value="Incluir">

    </form>



@endsection