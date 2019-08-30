@extends('principal')

@section('titulo','Item')

@section('conteudo')

{{--    <form method="post" action="{{route('items.store')}}">--}}
{{--        @csrf--}}
{{--        <p>Nome: <input type="text" name="nome"></p>--}}

{{--        <p>classe <input type="text" name="classe"></p>--}}

{{--        <p>tipo: <input type="text" name="tipo"></p>--}}

{{--        <p>price: <input type="text" name="price"></p>--}}

{{--        <p>gameprice: <input type="text" name="gameprice"></p>--}}
{{--        <input type="submit" name="btnsalvar" value="Incluir">--}}

{{--    </form>--}}

    <br>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div  style="background:slategrey" class="card-header">{{ __('Criar Item') }}</div>

                    <div class="card-body">
                        <form method="post" action="{{route('items.store')}}">
                            @csrf
                            <div class="form-group row">
                                <label for="nome" class="col-md-4 col-form-label text-md-right">{{ __('Nome:') }}</label>

                                <input type="text" name="nome">

                            </div>

                            <div class="form-group row">
                                <label for="User" class="col-md-4 col-form-label text-md-right">{{ __('Usuario:') }}</label>

                                <input style="width: 300px" type="text" name="usuario" value="{{$User->name}}" readonly>
                                <input type="hidden" name="user_id" value="{{$User->id}}" readonly>
                            </div>

                            <div class="form-group row">
                                <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Classe:') }}</label>

                                <input type="text" name="classe">

                            </div>
                            <div class="form-group row">
                                <label for="tipo" class="col-md-4 col-form-label text-md-right">{{ __('Tipo:') }}</label>

                                <input type="text" name="tipo">

                            </div>
                            <div class="form-group row">
                                <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Preço:') }}</label>

                                <input type="text" name="price">

                            </div>
                            <div class="form-group row">
                                <label for="gameprice" class="col-md-4 col-form-label text-md-right">{{ __('Game $:') }}</label>

                                <input type="text" name="gameprice">

                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary" value="Incluir">
                                        {{--                                        <input type="submit" name="btnsalvar" value="Incluir">--}}
                                        {{ __('Salvar') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection