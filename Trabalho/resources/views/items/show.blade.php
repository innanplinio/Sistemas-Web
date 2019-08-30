@extends('principal')

@section('titulo','Itens')

@section('conteudo')

{{--    <h1>Regiao: {{$item->nome}}</h1>--}}

{{--    <p>Código: {{$item->id}}</p>--}}
{{--    <p>Nome: {{$item->nome}}</p>--}}
{{--    <p>Nome: {{$item->tipo}}</p>--}}
{{--    <p>Nome: {{$item->classe}}</p>--}}
{{--    <p>Nome: {{$item->price}}</p>--}}


{{--         voltar para a lista de estados--}}

{{--    <a href={{route ('items.index')}}>Voltar</a>--}}

{{--         Editar o estado corrente--}}

{{--    <a href={{route ('items.edit', $item->id)}}>Editar</a>--}}

{{--     Excluir o estado corrente --}}

{{--    <form method="post" action="{{route ('items.destroy',$item->id)}}" onsubmit="return confirm('Confirmar exclusão');">--}}

{{--        @csrf--}}
{{--        @method('DELETE')--}}

{{--        <input type="submit" value ="excluir">--}}

{{--    </form>--}}


    <br>
    <br>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"  style="background:slategrey"  >{{ __($item->nome) }}</div>

                    <div class="card-body">

                        <div class="form-group">
                            <p>Código: {{$item->id}}</p>
                        </div>

                        <div class="form-group">
                            <p>Tipo: {{$item->tipo}}</p>
                        </div>

                        <div class="form-group">
                            <p>Classe: {{$item->classe}}</p>
                        </div>
                        <div class="form-group">
                            <p>Price: {{$item->price}}</p>
                        </div>
                        <div class="form-group">
                            <p>Price: {{$item->gameprice}}</p>
                        </div>
                        <div class="form-group">
                            <p>User: {{$User->name}} </p>

                            @if($User->tipo == 1)
                            <p><a href={{route ('items.edit', $item->id)}}>Editar</a></p>
                            @endif
                            <p><a href={{route ('items.index')}}>Voltar</a></p>
                        </div>
                        @if($User->tipo == 1)
                        <div class="form-group row mb-0">
                            <div class="col-md-6 ">
                                {{--                                @if($User->type == 1)--}}
                                <form method="post" action="{{route ('items.destroy',$item->id)}}" onsubmit="return confirm('Confirmar exclusão');">

                                    @csrf
                                    @method('DELETE')

                                    <input type="submit" value ="Excluir">

                                </form>
                                {{--                                @endif--}}
                            </div>
                        </div>
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection