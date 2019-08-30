@extends('principal')

@section('titulo','itemuser')

@section('conteudo')

{{--    <h1>Regiao: {{$itemuser->id}}</h1>--}}

{{--    <p>Código: {{$itemuser->item_id}}</p>--}}
{{--    <p>Nome: {{$itemuser->user_id}}</p>--}}

{{--    --}}{{--             voltar para a lista de estados--}}

{{--    <a href={{route ('itemuser.index')}}>Voltar</a>--}}

{{--    --}}{{--             Editar o estado corrente--}}

{{--    <a href={{route ('itemuser.edit', $itemuser->id)}}>Editar</a>--}}

{{--    --}}{{--         Excluir o estado corrente --}}

{{--    <form method="post" action="{{route ('itemuser.destroy',$itemuser->id)}}" onsubmit="return confirm('Confirmar exclusão');">--}}

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
                    <div class="card-header"  style="background:slategrey"  >{{ __('Item') }}</div>

                    <div class="card-body">

{{--                        <div class="form-group">--}}
{{--                            <p>Código: {{$itemuser->id}}</p>--}}
{{--                        </div>--}}

                        <div class="form-group">
                            @foreach($item as $e)

                                @if($e->id == $itemuser->item_id)
                                    <p>Nome: {{$e->nome}}</p>
                                @endif
                            @endforeach

                        </div>
                        <div class="form-group">
                            @foreach($item as $e)

                                @if($e->id == $itemuser->item_id)
                                    <p>Tipo: {{$e->tipo}}</p>
                                @endif
                            @endforeach

                        </div>
                        <div class="form-group">
                            @foreach($item as $e)

                                @if($e->id == $itemuser->item_id)
                                    <p>Classe: {{$e->classe}}</p>
                                @endif
                            @endforeach

                        </div>

                        <div class="form-group">
                            <p>Usuario: {{$User->name}}</p>
                        </div>


                        <div class="form-group">

                            <p><a href={{route ('itemuser.index')}}>Voltar</a></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
