<?php

namespace App\Http\Controllers;

use App\herouser;
use App\heroi;
use App\item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HerouserController extends Controller
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
        $heroi = heroi::all();
        $herouser = herouser::all();
        // View -> apresentar dados
        return view('herouser.index',['User'=>$User],['heroi'=>$heroi])->with('herouser',$herouser);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $heroi = heroi::all();
        $User = Auth::user();
        return view('herouser.create',['User'=>$User],['heroi'=>$heroi]);
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
        herouser::create($request->all());

        //Mensagem de sucesso
        // -- Flash
        // mensagem -> campo

        session()->flash('mensagem','Heroi inserido com sucesso !');

        //return redirect('/estados');
        return redirect()->route ('herouser.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\herouser  $herouser
     * @return \Illuminate\Http\Response
     */
    public function show(herouser $herouser)
    {
        //
        $item = item::all();
        $User = Auth::user();
        $heroi = heroi::all();
        return view('herouser.show',['User'=>$User],['heroi'=>$heroi],['item'=>$item])->with('herouser',$herouser);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\herouser  $herouser
     * @return \Illuminate\Http\Response
     */
    public function edit(herouser $herouser)
    {
        //
        return view('herouser.edit')->with('herouser',$herouser);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\herouser  $herouser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, herouser $herouser)
    {
        //
        $herouser->fill($request->all());

        $herouser->save();

        session()->flash('mensagem','Heroi atualizado com sucesso!');

        return redirect()->route('herouser.show',$herouser->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\herouser  $herouser
     * @return \Illuminate\Http\Response
     */
    public function destroy(herouser $herouser)
    {
        //
        $herouser->delete();

        session()->flash('mensagem','heroi excluido com sucesso!!');

        return redirect()->route('herouser.index');
    }
}
