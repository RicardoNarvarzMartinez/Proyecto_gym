<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Servicio;
use Illuminate\Support\Facades\Storage;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['servicios']=servicio::paginate(5);
        return view('servicios.listar',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('servicios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$DatosServicio=$request->all();
      $DatosServicio=$request->except('_token');
      if($request->hasFile('foto'))
      {
        $DatosServicio['foto']=$request->File('foto')->store('uplouds','public');
      }
      servicio::insert($DatosServicio);
      //return response()->json($DatosServicio);
      return redirect('Servicio');

      /* $datosServicio = new servicio;
       $datosServicio->fill($request->except('_token'));
       $datosServicio->save();
       return response()->json($DatosServicio);
       */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $servicios = servicio::findOrFail($id);

        return view('Servicios.editar',compact('servicios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $DatosServicio=request()->except(['_token','_method']);
        if($request->hasFile('foto'))
        {
          $servicios = servicio::findOrFail($id); //verifica que id exista
          Storage::delete('public/'.$servicios->foto); //borra la foto que esta en storage
          $DatosServicio['foto']=$request->File('foto')->store('uplouds','public');
        }


        servicio::where('id','=',$id)->update($DatosServicio);

        $servicios = servicio::findOrFail($id);
        return view('Servicios.editar',compact('servicios'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $servicios = servicio::findOrFail($id);
        if(Storage::delete('public/'.$servicios->foto))
        {
            servicio::destroy($id);
        }

        
        return redirect('Servicio');

    }
}
