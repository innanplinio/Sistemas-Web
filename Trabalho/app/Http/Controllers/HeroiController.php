<?php

namespace App\Http\Controllers;

use App\heroi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HeroiController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $User = Auth::user();
        $herois = heroi::all();
        // View -> apresentar dados
        return view('herois.index',['User'=>$User])->with('herois',$herois);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $User = Auth::user();
        return view('herois.create',['User'=>$User]);
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
        heroi::create($request->all());

        //Mensagem de sucesso
        // -- Flash
        // mensagem -> campo

        session()->flash('mensagem','Heroi inserido com sucesso !');

        //return redirect('/estados');
        return redirect()->route ('herois.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\heroi  $heroi
     * @return \Illuminate\Http\Response
     */
    public function show(heroi $herois)
    {
        //
        $User = Auth::user();
        return view('herois.show',['User'=>$User])->with('herois',$herois);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\heroi  $heroi
     * @return \Illuminate\Http\Response
     */
    public function edit(heroi $herois)
    {
        //
        $User = Auth::user();
        return view('herois.edit',['User'=>$User])->with('herois',$herois);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\heroi  $heroi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, heroi $herois)
    {
        //
        $herois->fill($request->all());

        $herois->save();

        session()->flash('mensagem','Heroi atualizado com sucesso!');

        return redirect()->route('herois.show',$herois->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\heroi  $heroi
     * @return \Illuminate\Http\Response
     */
    public function destroy(heroi $herois)
    {
        //
        $herois->delete();

        session()->flash('mensagem','heroi excluido com sucesso!!');

        return redirect()->route('herois.index');
    }
}
