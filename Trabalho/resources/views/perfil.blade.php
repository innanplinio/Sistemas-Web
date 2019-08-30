@extends('principal')

@section('titulo','Item')

@section('conteudo')


    <br>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div  style="background:slategrey" class="card-header">{{ $User->name}}</div>

                    <div class="card-body">
                        Email: {{$User->email}}
                    </div>
                    <div class="card-body">
                        @if($User->tipo == "1")
                            Tipo: Administrador
                        @else
                            Tipo: Cliente
                        @endif
                    </div>
                    <div class="card-body">
                        Carteira: {{$User->carteira}}

                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection