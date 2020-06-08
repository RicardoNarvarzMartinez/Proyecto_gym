<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AutocompleteController extends Controller
{
    //for create controller - php artisan make:controller AutocompleteController

    function index()
    {
     return view('autocomplete');
    }

    function check(Request $request)
    {
      if($request->get('email'))
      {
        $email = $request->get('email');
        $data = DB::table("users") ->where('email', $email) ->count();
        if($data > 0)
        {
          echo 'not_unique';
        }
        else
        {
          echo 'unique';
        }
      }
    }
    }

    function fetch(Request $request)
    {
     if($request->get('query'))
     {
      $query = $request->get('query');
      $data = DB::table('users')//se cambio contry por user
        ->where('email', 'LIKE', "%{$query}%")// se cambio contry_name por email
        ->get();
      $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
      foreach($data as $row)
      {
       $output .= '<li><a href="#">'.$row->email.'</a></li>';
      }
      $output .= '</ul>';
      echo $output;
     }
    }

}
