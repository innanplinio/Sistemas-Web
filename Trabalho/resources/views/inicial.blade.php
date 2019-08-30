@extends('principal')

@section('conteudo')

<!DOCTYPE html>
<html dir="ltr" lang="br">
<head>
    <meta charset="utf-8">
    <title>@yield('titulo','Sistema Jogo')</title>

    <title>Game</title>
    <!--    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->

    <link rel = "stylesheet" href="Estiloinicial.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<div class="mask rgba-black-light align-items-center">
    <!-- Content -->
    <div class="container">
        <!--Grid row-->
        <div class="row-8">
            <!--Grid column-->
            <div class="col-md-12 mb-4 white-text text-center">
                <h1 class="h1-reponsive white-text font-weight-bold mb-0 pt-md-5 pt-5 wow fadeInDown" data-wow-delay="0.3s">Welcome</h1>
                <hr class="hr-light my-4 wow fadeInDown" data-wow-delay="0.4s">
                <h5 class="mb-4 white-text wow fadeInDown" data-wow-delay="0.4s"><strong>The New Moba Game</strong></h5><br><br><br><br><br><br><br><br><br><br><br>
                <a style="height:44pt " class="btn btn-outline-white wow fadeInDown" data-wow-delay="0.4s">Game</a>
                <a style="height:44pt " class="btn btn-outline-white wow fadeInDown" data-wow-delay="0.4s">About us</a>
                <hr class="hr-light my-8 wow fadeInDown" data-wow-delay="0.4s">
            </div>
            <!--Grid column-->
        </div>

        <div class="row-12" id = "rodape">
            <div class="col-md-24 mb-4 white-text ">
                &copy;	New game, All rigths reserved
            </div>
        </div>
        <br><br>
        <!--Grid row-->
    </div>
    <!-- Content -->
</div>
{{--@yield("conteudo")--}}

</body>

</html>

@endsection