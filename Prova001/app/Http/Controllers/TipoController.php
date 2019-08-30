<?php

namespace App\Http\Controllers;

use App\tipo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        $tipo = tipo::orderby('nome')->get();
        // View -> apresentar dados
        return view('tipo.index')->with('tipo',$tipo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tipo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        tipo::create($request->all());

        //Mensagem de sucesso
        // -- Flash
        // mensagem -> campo

        session()->flash('mensagem','Tipo inserido com sucesso !');

        //return redirect('/estados');
        return redirect()->route ('tipo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tipo  $tipo
     * @return \Illuminate\Http\Response
     */
    public function show(tipo $tipo)
    {
        //
        $user = Auth::user();
        return view('tipo.show',['user'=>$user])->with('tipo', $tipo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tipo  $tipo
     * @return \Illuminate\Http\Response
     */
    public function edit(tipo $tipo)
    {
        //
        return view('tipo.edit')->with('tipo', $tipo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tipo  $tipo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tipo $tipo)
    {
        //
        $tipo->fill($request->all());

        $tipo->save();

        session()->flash('mensagem','Tipo atualizado com sucesso!');

        return redirect()->route('tipo.show',$tipo->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tipo  $tipo
     * @return \Illuminate\Http\Response
     */
    public function destroy(tipo $tipo)
    {
        //
        $tipo->delete();

        session()->flash('mensagem','Tipo excluido com sucesso!!');

        return redirect()->route('tipo.index');
    }
}
