<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
     public function index()
     {
         $logeado = Auth::user();
         if($logeado->rol == "Cobrador")
         return redirect("/Cobrador");
 
         if($logeado->rol == "Suscriptor")
         return redirect("/Suscriptor");
         
         //return view('home');
     }

}
