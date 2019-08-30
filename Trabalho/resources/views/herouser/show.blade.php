@extends('principal')

@section('titulo','herouser')

@section('conteudo')

{{--    <h1>Regiao: {{$herouser->id}}</h1>--}}

{{--    <p>Código: {{$herouser->hero_id}}</p>--}}
{{--    <p>Nome: {{$herouser->user_id}}</p>--}}

{{--             voltar para a lista de estados--}}

{{--    <a href={{route ('herouser.index')}}>Voltar</a>--}}

{{--             Editar o estado corrente--}}

{{--    <a href={{route ('herouser.edit', $herouser->id)}}>Editar</a>--}}

{{--         Excluir o estado corrente --}}

{{--    <form method="post" action="{{route ('herouser.destroy',$herouser->id)}}" onsubmit="return confirm('Confirmar exclusão');">--}}

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
                    <div class="card-header"  style="background:slategrey"  >{{ __('Heroi') }}</div>

                    <div class="card-body">


                        <div class="form-group">
                            @foreach($heroi as $e)

                                @if($e->id == $herouser->hero_id)
                                    <p>Nome: {{$e->nome}}</p>
                                @endif
                            @endforeach
                        </div>

                        <div class="form-group">
                            @foreach($heroi as $e)

                                @if($e->id == $herouser->hero_id)
                                    <p>Tipo: {{$e->tipo}}</p>
                                @endif
                            @endforeach
                        </div>
                        <div class="form-group">
                            @foreach($heroi as $e)

                                @if($e->id == $herouser->hero_id)
                                    <p>Classe: {{$e->classe}}</p>
                                @endif
                            @endforeach
                        </div>

                        <div class="form-group">
                            <p>User: {{$User->name}}</p>
                        </div>

                        <div class="form-group">

                            <p><a href={{route ('herouser.index')}}>Voltar</a></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
