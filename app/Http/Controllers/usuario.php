<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use DB;
use App\User;
class usuario extends Controller
{
    public function index()
    {
        return view('RegistroGym');
    }

    
    function check(Request $request)
    {
        $rol="Suscriptor";
        $User = new User(array(
            'name' => $request->get('name'), 
            'email' => $request->get('email'),
            'password' => Hash::make($request->password),
            'rol'=>'Suscriptor',
        ));
        $User->save();
        return redirect('LoginGym');
    }
    public function LoginGym()
    {
        return view('LoginGym');
    }
    public function iniciar(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('VistaUsuarioGym');
        }else
        {
            return redirect('LoginGym');
        }
    }
}
