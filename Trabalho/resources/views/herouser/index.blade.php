@extends('principal')

@section('titulo','herouser')

@section('conteudo')

{{--    <a href="{{route ('herouser.create')}}">Inserir</a>--}}
{{--    <table>--}}
{{--        <tr>--}}
{{--            <th>Hero</th>--}}
{{--            <th>User</th>--}}

{{--        </tr>--}}
{{--        @foreach ($herouser as $e)--}}
{{--            <tr>--}}
{{--                <td>{{ $e->id }}</td>--}}
{{--                <td><a href=" {{route ('herouser.show',$e->hero_id)}}">{{ $e->hero_id }}</a></td>--}}
{{--                <td><a href=" {{route ('herouser.show',$e->user_id)}}">{{ $e->user_id }}</a></td>--}}
{{--                <td><a href=" {{route ('herouser.show',$e->id)}}">Exibir</a></td>--}}
{{--            </tr>--}}



<br>
<br>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div  style="background:slategrey"  class="card-header">{{ __('Heros Usuario') }}</div>

                <div class="card-body">
                    <table  border="1" align="center"  style="text-align: center; width : 330px">
                        <thead>
                        <tr>

                            <th>Hero  </th>
                            <th>User</th>
                            <th>Editar / Excluir </th>
                        </tr>
                        </thead>
                        @foreach ($herouser as $e)
                            @if($e->user_id == $User->id)
                                <tr>

                                    <td>

                                        @foreach($heroi as $f)

                                            @if($f->id == $e->hero_id)
                                                {{$f->nome}}
                                            @endif
                                        @endforeach

                                    </td>
                                    <td>{{ $User->name}}  </td>


                                    <td><a href=" {{route ('herouser.show',$e->id)}}">Exibir</a></td>

                                </tr>
                            @endif
                        @endforeach
                    </table>
                    {{--                        @if($User->type == 1)--}}
                    <a href="{{route ('herouser.create')}}">Comprar Hero</a>
                    {{--                        @endif--}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
