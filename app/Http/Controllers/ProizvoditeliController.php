<?php

namespace App\Http\Controllers;

use App\Proizvoditeli;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProizvoditeliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $proizvoditeli = Proizvoditeli::all();

        return view('proizv.index', ['proizv'=>$proizvoditeli]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('proizv.create');

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
        if(Auth::check()){
            $proizv = Proizvoditeli::create([
                'name' => $request->input('name')
            ]);
            if($proizv){
                return redirect()->route('proizv.show', ['proizvoditeli'=> $proizv->id])
                    ->with('success' , 'Производитель добавлен!');
            }
        }

        return back()->withInput()->with('errors', 'Невозможно добавить!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Proizvoditeli  $proizvoditeli
     * @return \Illuminate\Http\Response
     */
    public function show(Proizvoditeli $proizv)
    {
        //
        //$proizvoditeli = Proizvoditeli::where('id', $proizvoditeli->id)->first();
        $proizv = Proizvoditeli::find($proizv->id);
        return view('proizv.show', ['proizvoditeli'=>$proizv]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Proizvoditeli  $proizvoditeli
     * @return \Illuminate\Http\Response
     */
    public function edit(Proizvoditeli $proizv)
    {
        //
        $proizv = Proizvoditeli::find($proizv->id);
        return view('proizv.edit', ['proizvoditeli'=>$proizv]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Proizvoditeli  $proizvoditeli
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proizvoditeli $proizv)
    {
        //
        $proizvUpdate = Proizvoditeli::where('id', $proizv->id)->update([
            'name' => $request->input('name')
        ]);
        if ($proizvUpdate){
            return redirect()->route('proizv.show',['proizvoditeli'=>$proizv->id])->with('success','Наименование производителя изменено');
        }
        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Proizvoditeli  $proizvoditeli
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proizvoditeli $proizv)
    {
        //
        $findProizvod = Proizvoditeli::find($proizv->id);
        if($findProizvod->delete()){
            return redirect()->route('proizv.index',['proizvoditeli'=>$proizv->id])->with('success','Производитель удален');
        }
        return back()->withInput()->with('error','Невозможно удалить!');
    }
}
