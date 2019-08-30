<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaginasController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth',['except'=>['geral']]);
    }
    public function index(){
        return view('home');
    }
    public function about()
    {
        return view('welcome');
    }
    public function adm(){
        $user = Auth::user();
        return view('adm', ['user'=>$user]);
    }
    public function cliente(){
        return view('clientes');
    }
    public function geral(){
        return view('geral');
    }

}
