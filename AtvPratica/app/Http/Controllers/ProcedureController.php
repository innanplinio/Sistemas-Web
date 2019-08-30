<?php

namespace App\Http\Controllers;

use App\procedure;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProcedureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth',['except'=>['create', 'show', 'edit']]);
    }
    public function index()
    {
        //
        $procedure = procedure::orderby('name')->get();
        $user = Auth::user();
        return view('procedures.index', ['user'=>$user])->with('procedure', $procedure);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $user = User::all();
        return view('procedures.create', ['user'=>$user]);
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
        procedure::create($request->all());

        //Mensagem de sucesso
        // -- Flash
        // mensagem -> campo

        session()->flash('mensagem','Procedimento inserido com sucesso !');

        //return redirect('/estados');
        return redirect()->route ('procedures.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\procedure  $procedure
     * @return \Illuminate\Http\Response
     */
    public function show(procedure $procedure)
    {
        //
        $user = Auth::user();
        return view('procedures.show', ['user'=>$user])->with('procedure', $procedure);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\procedure  $procedure
     * @return \Illuminate\Http\Response
     */
    public function edit(procedure $procedure)
    {
        //
        $user = User::all();
        return view('procedures.edit',['user'=>$user])->with('procedure', $procedure);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\procedure  $procedure
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, procedure $procedure)
    {
        //
        $procedure->fill($request->all());

        $procedure->save();

        session()->flash('mensagem','Procedimento atualizado com sucesso!');

        return redirect()->route('procedures.show',$procedure->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\procedure  $procedure
     * @return \Illuminate\Http\Response
     */
    public function destroy(procedure $procedure)
    {
        //

        $procedure->delete();

        session()->flash('mensagem','Procedimento excluido com sucesso!!');

        return redirect()->route('procedures.index');
    }
}
