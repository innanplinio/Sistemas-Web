<?php

namespace App\Http\Controllers;

use App\carteira;
use Illuminate\Http\Request;

class CarteiraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $carteira = carteira::all();
        // View -> apresentar dados
        return view('carteiras.index')->with('carteira',$carteira);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('carteiras.create');
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
        //
        carteira::create($request->all());

        //Mensagem de sucesso
        // -- Flash
        // mensagem -> campo

        session()->flash('mensagem','Carteira inserido com sucesso !');

        //return redirect('/estados');
        return redirect()->route ('carteiras.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\carteira  $carteira
     * @return \Illuminate\Http\Response
     */
    public function show(carteira $carteira)
    {
        //
        return view('carteiras.show')->with('carteira',$carteira);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\carteira  $carteira
     * @return \Illuminate\Http\Response
     */
    public function edit(carteira $carteira)
    {
        //
        return view('carteiras.edit')->with('carteira',$carteira);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\carteira  $carteira
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, carteira $carteira)
    {
        //
        $carteira->fill($request->all());

        $carteira->save();

        session()->flash('mensagem','Carteira atualizado com sucesso!');

        return redirect()->route('carteiras.show',$carteira->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\carteira  $carteira
     * @return \Illuminate\Http\Response
     */
    public function destroy(carteira $carteira)
    {
        //
        $carteira->delete();

        session()->flash('mensagem','Carteira excluido com sucesso!!');

        return redirect()->route('carteiras.index');
    }
}
