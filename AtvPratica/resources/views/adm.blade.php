@extends('inicio')

@section('titulo','Geral')

@section('conteudo')

    @if($user->type == 1)
    <h1>Área Administrativa</h1>

    <a href="/procedures">Relatório de Procedimentos</a><br>
    <a href="/procedures/create">Adicionar Procedimento</a><br><br>

    @elseif($user->type == 2)
        <h1>Área Administrativa</h1>

        <a href="/procedures">Relatório de Procedimentos</a><br><br>
    @else
        <h1>Somente Administradores</h1><br><br>
    @endif

    <a href="/">Voltar</a>
@endsection