<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Servicio;

class usuarioLogiado extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function VistaUsuarioGym()
    {
        return view('VistaUsuarioGym');
    }
    public function logout()
  {
    Auth::logout();
    return redirect('/');
  }
  public function EstadoCuentas()
  {
       $Servicio = Servicio::all();
    $Servicio = Servicio::all();
      return view('EstadoCuentas',compact('Servicio'));
  }
   public function Historial()
  {
      return view('Historial');
  }
}
