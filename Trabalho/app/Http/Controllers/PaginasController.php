<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaginasController extends Controller
{
    //
    public function index(){
        return view('inicial');
    }
    public function news(){
        return view('news');
    }
    public function perfil(){
        $User = Auth::user();
        return view('perfil',['User'=>$User]);
    }
    public function about(){
        return view('welcome');
    }

}
