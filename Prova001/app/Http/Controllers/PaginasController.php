<?php

namespace App\Http\Controllers;

use App\tipo;
use App\cliente;
use Illuminate\Http\Request;

class PaginasController extends Controller
{
    //
    public function index(){
        return view('inicio');
    }
    public function about(){
        return view('welcome');
    }
    public function geral(tipo $tipo, cliente $cliente){
        $tipo = tipo::all();
        $cliente = cliente::all();
        return view('geral')->with('tipo',$tipo)->with('cliente', $cliente);
    }
    public function clientes(){
        return view('clientes');
    }
    public function adm(){
        return view('adm');
    }
}
