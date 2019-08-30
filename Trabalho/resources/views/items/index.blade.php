@extends('principal')

@section('titulo','itens')

@section('conteudo')

{{--    <a href="{{route ('items.create')}}">Inserir</a>--}}
{{--    <table>--}}
{{--        <tr>--}}
{{--            <th>Código</th>--}}
{{--            <th>Nome</th>--}}
{{--            <th>tipo</th>--}}
{{--            <th>classe</th>--}}
{{--            <th>price</th>--}}
{{--            <th>gameprice</th>--}}
{{--        </tr>--}}
{{--        @foreach ($item as $e)--}}
{{--            <tr>--}}
{{--                <td>{{ $e->id }}</td>--}}
{{--                <td><a href=" {{route ('items.show',$e->id)}}">{{ $e->nome }}</a></td>--}}
{{--                <td><a href=" {{route ('items.show',$e->id)}}">{{ $e->tipo }}</a></td>--}}
{{--                <td><a href=" {{route ('items.show',$e->id)}}">{{ $e->classe }}</a></td>--}}
{{--                <td><a href=" {{route ('items.show',$e->id)}}">{{ $e->price }}</a></td>--}}
{{--                <td><a href=" {{route ('items.show',$e->id)}}">{{ $e->gameprice }}</a></td>--}}
{{--                <td><a href=" {{route ('items.show',$e->id)}}">Exibir</a></td>--}}
{{--            </tr>--}}

{{--        @endforeach--}}
{{--    </table>--}}
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
                                <th>Editar / Excluir </th>
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

                                    <td><a href=" {{route ('items.show',$e->id)}}">Exibir</a></td>
                                </tr>

                            @endforeach
                        </table>
                        {{--                        @if($User->type == 1)--}}
                        @if($User->tipo == 1)
                        <a href="{{route ('items.create')}}">Inserir Item</a>
                        @endif
                            {{--                        @endif--}}
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection