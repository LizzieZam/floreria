<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfilesController extends Controller
{
    /** 
     *  @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request){
        $login=\App\Models\Profile::where([['login','=',$request['login']['username']],['password','=', $request['login']['password']]])->get();
      
      if(count($login)>=1)
            return $login;
        else
            return 'Usuario o Contraseña incorrecto';
    }
    
}
