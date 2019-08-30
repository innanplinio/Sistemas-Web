@extends('principal')

@section('titulo','Editar herouser')

@section('conteudo')

{{--    <form method="post" action="{{route('herouser.update',$herouser->id)}}">--}}
{{--        @csrf--}}
{{--        @method('PATCH')--}}
{{--        <p>Hero_id: <input type="text" name="nome" value = "{{$herouser->hero_id}}"></p>--}}
{{--        <p>User_id: <input type="text" name="tipo" value = "{{$herouser->user_id}}"></p>--}}

{{--        <input type="submit" name="btnsalvar" value="Salvar">--}}

{{--    </form>--}}

    <br>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"  style="background:slategrey" >{{ __('Editar Itens') }}</div>

                    <div class="card-body">
                        <form method="post" action="{{route('herouser.update',$herouser->id)}}">
                            @csrf
                            @method('PATCH');

                            <input type="hidden" name="user_id" value = "{{$User->id}}" >
                            <div class="form-group row">
                                <label for="user_id" class="col-md-4 col-form-label text-md-right">{{ __('User:') }}</label>

                                <input type="text" name="user_id" value = "{{$User->name}}" disabled>
                            </div>

                            {{--                            @if($User->type == 1)--}}
                            <div class="form-group row">
                                <label for="hero_id" class="col-md-4 col-form-label text-md-right">{{ __('Hero:') }}</label>

                                <div class="col-md-6">

                                    <input type="text" name="hero_id" value = "{{$herouser->hero_id}}">

                                </div>
                            </div>
                            {{--                            @endif--}}


                            <div class="form-group row">
                                <label for="user_id" class="col-md-4 col-form-label text-md-right">{{ __('User:') }}</label>

                                <input type="text" name="user_id" value = "{{$herouser->user_id}}">
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    {{--                                    <button type="submit" class="btn btn-primary" value="Incluir">--}}
                                    <input type="submit" name="btnsalvar" value="Salvar">

                                    {{--                                    </button>--}}
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection