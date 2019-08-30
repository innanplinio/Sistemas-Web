<?php

namespace App\Http\Controllers;

use App\itemuser;
use App\item;
use App\heroi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ItemuserController extends Controller
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
        $item = item::all();
        $itemuser = itemuser::all();
        // View -> apresentar dados
        return view('itemuser.index',['User'=>$User],['item'=>$item])->with('itemuser',$itemuser);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $item = item::all();
        $User = Auth::user();
        return view('itemuser.create',['User'=>$User],['item'=>$item]);
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
        itemuser::create($request->all());

        //Mensagem de sucesso
        // -- Flash
        // mensagem -> campo

        session()->flash('mensagem','Heroi inserido com sucesso !');

        //return redirect('/estados');
        return redirect()->route ('itemuser.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\itemuser  $itemuser
     * @return \Illuminate\Http\Response
     */
    public function show(itemuser $itemuser)
    {
        //
        $User = Auth::user();
        $item = item::all();
        $heroi = heroi::all();
        return view('itemuser.show',['User'=>$User],['item'=>$item],['heroi'=>$heroi])->with('itemuser',$itemuser);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\itemuser  $itemuser
     * @return \Illuminate\Http\Response
     */
    public function edit(itemuser $itemuser)
    {
        //
        $User = Auth::user();
        return view('itemuser.edit',['User'=>$User])->with('itemuser',$itemuser);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\itemuser  $itemuser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, itemuser $itemuser)
    {
        //
        $itemuser->fill($request->all());

        $itemuser->save();

        session()->flash('mensagem','Heroi atualizado com sucesso!');

        return redirect()->route('itemuser.show',$itemuser->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\itemuser  $itemuser
     * @return \Illuminate\Http\Response
     */
    public function destroy(itemuser $itemuser)
    {
        //
        $itemuser->delete();

        session()->flash('mensagem','heroi excluido com sucesso!!');

        return redirect()->route('itemuser.index');
    }
}
