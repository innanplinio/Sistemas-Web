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
    <li> <a href="/">Tela Inicial</a></li>
    <li> <a href="/home">Login</a></li>
    <li> <a href="/register">Registrar Usuário</a></li>
    <li> <a href="/geral">Area Geral</a></li>
    <li> <a href="/clientes">Area dos Clientes</a></li>
    <li> <a href="/adm">Area Administrativa</a></li>
</ul>


{{--            <h2>Lista de pessoas na Turma</h2>--}}
{{--                <ol>--}}
{{--                @foreach($alunos as $a)--}}
{{--                    <li>{{$a}}</li>--}}
{{--                @endforeach--}}
{{--                </ol>--}}



@yield("conteudo")

</body>

</html>