<?php

namespace App\Http\Controllers;

use App\Suscriptores;
use Illuminate\Http\Request;
use App\Servicio;
use Illuminate\Support\Facades\Storage;


class SuscriptoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->user()->rol == 'Suscriptor')
        { 
            return view('Suscriptor');

        }else{return view('404');}
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Suscriptores  $suscriptores
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $datos['servicios']=servicio::paginate(5);
        return view('Suscriptor/Lista',$datos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Suscriptores  $suscriptores
     * @return \Illuminate\Http\Response
     */
    public function edit(Suscriptores $suscriptores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Suscriptores  $suscriptores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Suscriptores $suscriptores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Suscriptores  $suscriptores
     * @return \Illuminate\Http\Response
     */
    public function destroy(Suscriptores $suscriptores)
    {
        //
    }
}
