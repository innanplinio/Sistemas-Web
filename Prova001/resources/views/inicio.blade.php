<!DOCTYPE html>
<html dir="ltr" lang="br">
<head>
    <meta charset="utf-8">
    <title>@yield('titulo','Sistema Acadêmico')</title>
</head>
<body>
<!-- Exibir mensagens -> campo: mensagem //-->

@if(Session:: has('mensagem'))

    <p><strong>{{ Session:: get('mensagem') }}</strong>

@endif
{{--            <p>Seja Bem vindo,{{  $nome }} !</p>--}}
{{--            <p>Usuario:,{{  $user }} !</p>--}}
{{--            --}}

<ul>

    <li> <a href="/">Home</a></li>
    <li> <a href="/welcome">About</a></li>
    <li> <a href="/geral">Area Geral</a></li>
    <li> <a href="/clientes">Area dos Clientes</a></li>
    <li> <a href="/adm">Area Administrativa</a></li>
    <li> <a href="/home">Login/Registrar</a></li>

</ul>




@yield("conteudo")

</body>

</html>