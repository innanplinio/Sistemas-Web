@extends('principal')

@section('titulo','Editar Heroi')

@section('conteudo')

{{--    <form method="post" action="{{route('herois.update',$herois->id)}}">--}}
{{--        @csrf--}}
{{--        @method('PATCH')--}}
{{--        <p>Nome: <input type="text" name="nome" value = "{{$herois->nome}}"></p>--}}
{{--        <p>tipo: <input type="text" name="tipo" value = "{{$herois->tipo}}"></p>--}}
{{--        <p>classe: <input type="text" name="classe" value = "{{$herois->classe}}"></p>--}}
{{--        <p>price: <input type="text" name="price" value = "{{$herois->price}}"></p>--}}

{{--        <input type="submit" name="btnsalvar" value="Salvar">--}}

{{--    </form>--}}

    <br>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"  style="background:slategrey" >{{ __('Editar Exame') }}</div>

                    <div class="card-body">
                        <form method="post" action="{{route('herois.update',$herois->id)}}">
                            @csrf
                            @method('PATCH')
                            {{--                            @if($User->type == 1)--}}
                            <div class="form-group row">
                                <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('Nome:') }}</label>

                                    <input type="text" name="nome" value = "{{$herois->nome}}">
                            </div>
                            {{--                            @endif--}}
                            <input type="hidden" name="user_id" value = "{{$User->id}}" >
                            <div class="form-group row">
                                <label for="user_id" class="col-md-4 col-form-label text-md-right">{{ __('User:') }}</label>

                                <input type="text" name="user_id" value = "{{$User->name}}" readonly>
                            </div>

                            <div class="form-group row">
                                <label for="tipo1" class="col-md-4 col-form-label text-md-right">{{ __('Preço:') }}</label>

                                <input type="text" name="tipo" value = "{{$herois->tipo}}">
                            </div>
                            <div class="form-group row">
                                <label for="classe" class="col-md-4 col-form-label text-md-right">{{ __('Preço:') }}</label>

                                <input type="text" name="classe" value = "{{$herois->classe}}">
                            </div>
                            <div class="form-group row">
                                <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Preço:') }}</label>

                                <input type="text" name="price" value = "{{$herois->price}}">
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