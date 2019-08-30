<?php

namespace App\Http\Controllers;

use App\test;
use App\User;
use App\procedure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
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
        $test = test::orderby('date')->get();
        $user = Auth::user();
        $procedure = procedure::all();
        return view('tests.index', ['user'=>$user], ['procedure'=> $procedure])->with('test', $test);
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
        $user2 = Auth::user();
        $procedure = procedure::all();
        return view('tests.create', ['user'=>$user], ['procedure'=> $procedure])->with('user2', $user2);
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
        test::create($request->all());

        //Mensagem de sucesso
        // -- Flash
        // mensagem -> campo

        session()->flash('mensagem','Teste inserido com sucesso !');

        //return redirect('/estados');
        return redirect()->route ('tests.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\test  $test
     * @return \Illuminate\Http\Response
     */
    public function show(test $test)
    {
        //
        return view('tests.show')->with('test', $test);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\test  $test
     * @return \Illuminate\Http\Response
     */
    public function edit(test $test)
    {
        //

        $user = User::all();
        $procedure = procedure::all();
        return view('tests.edit', ['user'=>$user], ['procedure'=> $procedure])->with('test', $test);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\test  $test
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, test $test)
    {
        //
        $test->fill($request->all());

        $test->save();

        session()->flash('mensagem','Test atualizado com sucesso!');

        return redirect()->route('tests.show',$test->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\test  $test
     * @return \Illuminate\Http\Response
     */
    public function destroy(test $test)
    {
        //

        $test->delete();

        session()->flash('mensagem','Test excluido com sucesso!!');

        return redirect()->route('tests.index');
    }
}
