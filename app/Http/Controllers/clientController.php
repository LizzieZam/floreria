<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class clientController extends Controller
{
    //
    public function index(){
        return \App\client::orderBy('cli_name','asc')->get();
    }

    public function update(Request $request,$id){
        $envio=\App\client::findOrFail($request->id);
               
        if($envio->save()){
            return 'Registro actualizado exitosamente';
        }else{
            return 'Intente nuevamente';
        }
    }
    
    
    public function store(Request $request){
        $cliente=$request->all();
        
        $row=\App\client::create($cliente);
        if($row){
            return 'Registro exitoso';
        }else{
            return 'Intente nuevamente';
        }
    }
    
}
