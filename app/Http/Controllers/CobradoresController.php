<?php

namespace App\Http\Controllers;

use App\Cobradores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\User;

class CobradoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->user()->rol == 'Cobrador')
        { 
            return view('Cobrador');

        }else{return view('404');}
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listar()
    {
        

        $datos['User']=user::paginate(5);
        return view('Cobrador/ListaSuscritos',$datos);
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cobradores  $cobradores
     * @return \Illuminate\Http\Response
     */
    public function show(Cobradores $cobradores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cobradores  $cobradores
     * @return \Illuminate\Http\Response
     */
    public function edit(Cobradores $cobradores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cobradores  $cobradores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cobradores $cobradores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cobradores  $cobradores
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cobradores $cobradores)
    {
        //
    }
}
