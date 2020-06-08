<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usuario extends Controller
{
    public function index()
    {
        return view('RegistroGym');
    }
    public function Guardar(Request $request)
    {
        return view("RegistroGym");
    }
}
