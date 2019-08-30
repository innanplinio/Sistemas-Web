<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('titulo', 'Sistema Acadêmico')</title>
</head>
<body>

<!-- Exibir mensagens -> campo: mensagens //-->
@if(Session::has('mensagem') )
    <p><strong>{{ Session::get('mensagem') }}</strong></p>
    @endif


{{--Links - menu lateral--}}
<ul>
    <li><a href="/">Home</a></li>
    <li><a href="/welcome">About</a></li>
    <li><a href="/alunos/listar">Listar</a></li>
    <li><a href="/estados">Estados</a></li>
</ul>




@yield('conteudo')


</body>
</html>
