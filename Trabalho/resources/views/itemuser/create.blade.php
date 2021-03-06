@extends('principal')

@section('titulo','itemuser')

@section('conteudo')


{{--    <br>--}}
{{--    <br>--}}
{{--    <div class="container">--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-md-8">--}}
{{--                <div class="card">--}}
{{--                    <div  style="background:slategrey" class="card-header">{{ __('Criar Item') }}</div>--}}

{{--                    <div class="card-body">--}}
{{--                        <form method="post" action="{{route('itemuser.store')}}">--}}
{{--                            @csrf--}}
{{--                            <div class="form-group row">--}}
{{--                                <label for="User" class="col-md-4 col-form-label text-md-right">{{ __('Usuario:') }}</label>--}}

{{--                                <input style="width: 300px" type="text" name="usuario" value="{{$User->name}}" readonly>--}}
{{--                                <input type="hidden" name="user_id" value="{{$User->id}}" readonly>--}}
{{--                            </div>--}}

{{--                            <div class="form-group row">--}}
{{--                                <label for="item_id" class="col-md-4 col-form-label text-md-right">{{ __('Item:') }}</label>--}}

{{--                                <input type="text" name="item_id" value="2">--}}

{{--                            </div>--}}


{{--                            <div class="form-group row">--}}
{{--                                <label for="user_id" class="col-md-4 col-form-label text-md-right">{{ __('User:') }}</label>--}}

{{--                                <input type="text" name="user_id" value="{{$User->id}}">--}}

{{--                            </div>--}}

{{--                            <div class="form-group row mb-0">--}}
{{--                                <div class="col-md-6 offset-md-4">--}}
{{--                                    <button type="submit" class="btn btn-primary" value="Incluir">--}}
{{--                                                                                <input type="submit" name="btnsalvar" value="Incluir">--}}
{{--                                        {{ __('Salvar') }}--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

<br>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div  style="background:slategrey"  class="card-header">{{ __('Tabela de items') }}</div>

                <div class="card-body">
                    <table  border="1" align="center"  style="text-align: center; width : 330px">
                        <thead>
                        <tr>
                            <th>Código  </th>
                            <th>Nome  </th>
                            <th>Tipo</th>
                            <th>Classe</th>
                            <th>Price</th>
                            <th>Gameprice</th>

                            <th>Comprar </th>
                        </tr>
                        </thead>
                        @foreach ($item as $e)
                            <tr>
                                <td>{{ $e->id }}  </td>
                                <td>{{ $e->nome }}  </td>
                                <td>{{ $e->tipo }}  </td>
                                <td>{{ $e->classe }}  </td>
                                <td>{{ $e->price  }}  </td>
                                <td>{{ $e->gameprice  }}  </td>

                                <td>
                                    <form method="post" action="{{route('itemuser.store')}}">
                                        @csrf
                                    <input type="text" name="item_id" value="{{$e->id}}" hidden >
                                    <input type="text" name="user_id" value="{{$User->id}}" hidden>
{{--                                        <input type="submit" name="btnsalvar" value="Incluir">--}}
                                        <button type="submit" class="btn btn-primary" value="Incluir">
                                            {{--                                                                                <input type="submit" name="btnsalvar" value="Incluir">--}}
                                            {{ __('Comprar') }}
                                        </button>
                                </form>
                                </td>

                            </tr>
{{--                            <div class="form-group row mb-0">--}}
{{--                                <div class="col-md-6 offset-md-4">--}}
{{--                                    <button type="submit" class="btn btn-primary" value="Incluir">--}}
{{--                                        <input type="submit" name="btnsalvar" value="Incluir">--}}
{{--                                        {{ __('Salvar') }}--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        @endforeach
                    </table>
                    {{--                        @if($User->type == 1)--}}
                    <a href="{{route ('itemuser.index')}}">Voltar</a>
                    {{--                        @endif--}}

                </div>
            </div>
        </div>
    </div>
</div>


@endsection
