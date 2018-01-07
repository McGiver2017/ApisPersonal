<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usuario;
use App\Http\Resources\UsuarioResource;
use App\proyecto;
class ApiController extends Controller
{
    public function usuarios(){
        return usuario::get();
    }
    public function usuario($id){
        return usuario::find($id);
    }
    public function registrarUsuario(Request $request){
        $data = usuario::create($request->all());
        if ($data) {
            return 'registrado';
        }
        else{
            return 'ocurrio un error';
        }
    }
    public function updateUsuario($id,Request $request){
        $data = usuario::updateOrCreate(['id' => $id],$request->all());
        if ($data) {
            return 'actualizado '.$id;
        }
        else{
            return 'ocurrio un error';
        }
    }
    public function login(Request $request){

       $usuario = usuario::where('email',$request->email)->get();
       if(count($usuario)!==0){
            $pass=$usuario[0]->password;
        $passReq = $request->password."";
        if ($pass==$passReq) {
           return new UsuarioResource($usuario[0]); 
        }
        else{            
            return ;            
        }
       }
       return ;
    }
    public function show($id){
        return proyecto::getproyect($id);
    }
}
