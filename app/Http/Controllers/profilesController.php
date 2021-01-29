<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profilesController extends Controller
{
    public function login(Request $request){
        $login=\App\profiles::where([['login','=',$request['login']['username']],['password','=', $request['login']['password']]])->get();
      
      if(count($login)>=1)
            return $login;
        else
            return 'Usuario o Contraseña incorrecto';
    }
    
}
