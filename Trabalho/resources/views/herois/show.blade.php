@extends('principal')

@section('titulo','heros')

@section('conteudo')

{{--    <h1>Nome: {{$herois->nome}}</h1>--}}
{{--    <p>Código: {{$herois->id}}</p>--}}

{{--    <p>nome: {{$herois->nome}}</p>--}}
{{--    <p>Tipo: {{$herois->tipo}}</p>--}}
{{--    <p>Classe: {{$herois->classe}}</p>--}}
{{--    <p>Price: {{$herois->price}}</p>--}}

{{--             voltar para a lista de estados--}}

{{--    <a href={{route ('herois.index')}}>Voltar</a>--}}

{{--             Editar o estado corrente--}}

{{--    <a href={{route ('herois.edit', $herois->id)}}>Editar</a>--}}

{{--         Excluir o estado corrente --}}

{{--    <form method="post" action="{{route ('herois.destroy',$herois->id)}}" onsubmit="return confirm('Confirmar exclusão');">--}}

{{--        @csrf--}}
{{--        @method('DELETE')--}}

{{--        <input type="submit" value ="excluir">--}}

{{--    </form>--}}

{{--    <br>--}}
{{--    <br>--}}

<br>
<br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"  style="background:slategrey"  >{{ __($herois->nome) }}</div>

                    <div class="card-body">

                        <div class="form-group">
                            <p>Código: {{$herois->id}}</p>
                        </div>

                        <div class="form-group">
                            <p>Tipo: {{$herois->tipo}}</p>
                        </div>

                        <div class="form-group">
                            <p>Classe: {{$herois->classe}}</p>
                        </div>
                        <div class="form-group">
                            <p>Price: {{$herois->price}}</p>
                        </div>
                        <div class="form-group">
                            <p>User: {{$User->name}} </p>
                            @if($User->tipo == 1)
                            <p><a href={{route ('herois.edit', $herois->id)}}>Editar</a></p>
                            @endif
                            <p><a href={{route ('herois.index')}}>Voltar</a></p>
                        </div>
                        @if($User->tipo == 1)
                        <div class="form-group row mb-0">
                            <div class="col-md-6 ">
                                {{--                                @if($User->type == 1)--}}
                                <form method="post" action="{{route ('herois.destroy',$herois->id)}}" onsubmit="return confirm('Confirmar exclusão');">

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