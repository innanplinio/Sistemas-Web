@extends('principal')

@section('titulo','Usuario')

@section('conteudo')
        <!DOCTYPE html>
<html lang="br">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

{{--    <link rel = "stylesheet" href="Estilologin.css">--}}

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<div class="container" id="cadastro">

    <form method="post" action="{{route('usuarios.store')}}">
        @csrf
        <div id="grupo1" class="form-group" style="width:260px">
            <label for="valor1" id="lbv1" style="height:28px">Nome</label>
            <input class = "form-control" type = "text" name="nome" id="valor1">
            <label for="valor2" id="lbv2" style="height:28px">Email</label>
            <input class = "form-control" type = "text" name="email" id="valor2">
            <div  style="width:180px">
                <label for="data" style="height:28px">Data de nascimento</label>
                <input class = "form-control" type = "date" name="datanasc" id="data" >
            </div>
            <label for="imprime3"style="height:28px">Login</label>
            <input class = "form-control" type = "text" name="usuario" id="imprime3" >
            <label for="peso1"style="height:29px">Senha</label>
            <input class = "form-control" type = "password" name="password" id="peso12" >
            <label for="peso1"style="height:29px">Senha</label>
            <input class = "form-control" type = "text" name="item_id" id="peso13" >
            <label for="peso1"style="height:29px">Senha</label>
            <input class = "form-control" type = "text" name="heroi_id" id="peso14" >

            <div id="btnsalvar" class="form-group" >
                <button type="submit" class = "btn-primary" name="calcular" id="calcular" style="width:120px; height:40px">Salvar</button>
            </div>

        </div>

        <div id="alerta1" style ="display: none" class ="alert alert-danger">
            <span>Preencha o valor 1 corretamente</span>
        </div>

        <div id="alerta2" style ="display: none" class ="alert alert-danger">
            <span>Preencha o valor 2 corretamente</span>
        </div>

        <br>



    </form>
</div>

<div id="rodape">
    <div class="col-md-12 mb-4 white-text text-center">
        <hr class="hr-light my-2 wow fadeInDown" data-wow-delay="0.4s">
    </div>

    <div class="container">
        &copy;	New game, All rigths reserved
    </div>

</div>
<br>
</body>
</html>
{{--    <form method="post" action="{{route('usuarios.store')}}">--}}
{{--        @csrf--}}
{{--        <p>Nome: <input type="text" name="nome"></p>--}}

{{--        <p>email: <input type="text" name="email"></p>--}}

{{--        <p>datanasc: <input type="text" name="datanasc"></p>--}}

{{--        <p>usuario: <input type="text" name="usuario"></p>--}}

{{--        <p>senha: <input type="text" name="password"></p>--}}

{{--        <p>item_id: <input type="text" name="item_id"></p>--}}

{{--        <p>heroi_id: <input type="text" name="heroi_id"></p>--}}

{{--        <input type="submit" name="btnsalvar" value="Incluir">--}}

{{--    </form>--}}


@endsection