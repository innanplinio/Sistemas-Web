@extends('inicio')

@section('titulo','Procedimento')

@section('conteudo')

    <h1>Novo Procedimento:</h1>
    <form method="post" action="{{route('procedures.store')}}">
        @csrf
        <p>Nome : <input type="text" name="name"></p>
        <p>Preço: <input type="text" name="price"></p>
        <p>Cliente:</p>
        <select name="user_id">
            @foreach($user as $e)
                @if($e->type == 1)
                <option value="{{$e->id}}">{{$e->name}}</option>
                @endif
            @endforeach
        </select><br><br>
            <input type="submit" name="btnsalvar" value="Incluir">

    </form>



@endsection