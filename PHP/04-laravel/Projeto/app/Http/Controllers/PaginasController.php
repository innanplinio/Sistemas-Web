<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller
{
    public function index(){
        return view('principal');
    }
    public function about(){
        return view('welcome');
    }
    public function listar(){
        $nome = "Fernando";
        $usuario="Innan";
        $alunos = ['Ana', 'Maria', 'Braga', 'Lokona'];

        return view('lista')
            ->with('alunos', $alunos);
    }
}
