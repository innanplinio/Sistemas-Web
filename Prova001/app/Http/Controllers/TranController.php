<?php

namespace App\Http\Controllers;

use App\tran;
use App\cliente;
use App\tipo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TranController extends Controller
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
        $tran = tran::all();
        $cliente = cliente::all();
        // View -> apresentar dados
        return view('tran.index')->with('tran',$tran)->with('cliente', $cliente);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $cliente = Cliente::all();
        $tipo = Tipo::all();
        return view('tran.create', ['cliente'=>$cliente], ['tipo'=>$tipo]);
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
        tran::create($request->all());

        //Mensagem de sucesso
        // -- Flash
        // mensagem -> campo

        session()->flash('mensagem','Transação inserido com sucesso !');

        //return redirect('/clientes');
        return redirect()->route ('tran.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tran  $tran
     * @return \Illuminate\Http\Response
     */
    public function show(tran $tran)
    {
        //
        $cliente = Cliente::all();
        $tipo = tipo::all();
        $user = Auth::user();
        return view('tran.show', ['user'=>$user], ['cliente'=>$cliente], ['tipo'=>$tipo])->with('tran', $tran);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tran  $tran
     * @return \Illuminate\Http\Response
     */
    public function edit(tran $tran)
    {
        //
        $cliente = Cliente::all();
        $tipo = tipo::all();
        return view('tran.edit', ['cliente'=>$cliente], ['tipo'=>$tipo])->with('tran', $tran);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tran  $tran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tran $tran)
    {
        //
        $tran->fill($request->all());

        $tran->save();

        session()->flash('mensagem','Transação atualizado com sucesso!');

        return redirect()->route('tran.show',$tran->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tran  $tran
     * @return \Illuminate\Http\Response
     */
    public function destroy(tran $tran)
    {
        //
        $tran->delete();

        session()->flash('mensagem','Transação excluido com sucesso!!');

        return redirect()->route('tran.index');
    }

    public function selectClient(Request $request)
    {
        //
        $tran = tran::where('cliente_id',$request->cliente_id)->get();
        return view('tran.selectclient',['tran'=>$tran,'criterio'=>$request->cliente_id]);

    }
}
