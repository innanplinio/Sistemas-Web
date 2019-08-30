@extends('inicio')

@section('titulo','Editar Cliente')

@section('conteudo')

    <h1>Editar Procedimento:</h1>
    <form method="post" action="{{route('procedures.update',$procedure->id)}}">
        @csrf
        @method('PATCH')
        <p>Nome: <input type="text" name="name" value = "{{$procedure->name}}"></p>
        <p>Preço: <input type="text" name="price" value = "{{$procedure->price}}"></p>
        <p>Cliente:</p>
        <select name="user_id">
            @foreach($user as $e)
                @if($e->type == 1)
                <option value="{{$e->id}}" selected="{{$procedure->user_id}}">{{$e->name}}</option>
                @endif
            @endforeach
        </select><br><br>
            <input type="submit" name="btnsalvar" value="Salvar">

    </form>
@endsection