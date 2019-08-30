@extends('principal')

@section('titulo','itemuser')

@section('conteudo')

{{--    <a href="{{route ('itemuser.create')}}">Inserir</a>--}}
{{--    <table>--}}
{{--        <tr>--}}
{{--            <th>item</th>--}}
{{--            <th>User</th>--}}

{{--        </tr>--}}
{{--        @foreach ($itemuser as $e)--}}
{{--            <tr>--}}
{{--                <td>{{ $e->id }}</td>--}}
{{--                <td><a href=" {{route ('itemuser.show',$e->item_id)}}">{{ $e->item_id }}</a></td>--}}
{{--                <td><a href=" {{route ('itemuser.show',$e->user_id)}}">{{ $e->user_id }}</a></td>--}}
{{--                <p><a href="{{route ('itemuser.show',$e->id)}}>{{$e->user_id}}-{{$e->user->id}}"></a>--}}
{{--                <td><a href=" {{route ('itemuser.show',$e->id)}}">Exibir</a></td>--}}
{{--            </tr>--}}

{{--        @endforeach--}}
{{--    </table>--}}


    <br>
    <br>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div  style="background:slategrey"  class="card-header">{{ __('Itens Usuario') }}</div>

                    <div class="card-body">
                        <table  border="1" align="center"  style="text-align: center; width : 330px">
                            <thead>
                            <tr>

                                <th>Item  </th>
                                <th>User</th>
                                <th>Editar / Excluir </th>
                            </tr>
                            </thead>
                            @foreach ($itemuser as $e)
                                @if($e->user_id == $User->id)
                                <tr>

                                    <td>

                                        @foreach($item as $f)

                                            @if($f->id == $e->item_id)
                                                {{$f->nome}}
                                            @endif
                                        @endforeach

                                    </td>
                                    <td>{{ $User->name}}  </td>


                                    <td><a href=" {{route ('itemuser.show',$e->id)}}">Exibir</a></td>

                                </tr>
                                @endif
                            @endforeach
                        </table>
                        {{--                        @if($User->type == 1)--}}
                        <a href="{{route ('itemuser.create')}}">Comprar Item</a>
                        {{--                        @endif--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
