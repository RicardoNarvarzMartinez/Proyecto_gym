<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicio;
use Illuminate\Support\Facades\Storage;

class Anonimo extends Controller
{
    public function index()
    {
    $datos['servicios']=servicio::paginate(5);
    return view('ListaAnonimo',$datos);
    }
}
