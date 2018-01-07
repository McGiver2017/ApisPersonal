<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proyecto extends Model
{
    protected $fillable = ['usuario_id','nombre','repositorio','dirigido','descripcion','email','fecha_inicio','fecha_final'];
    public static function getproyects () {
        $lista = proyecto::all();
        $data = Array();
        foreach ($lista as $reg) {
            $data[] = array(                
                'id' => $reg->id,
                'nombre' => $reg->nombre,
                'descripcion' => $reg->descripcion,
                'repositorio' => $reg->repositorio,
                'dirigido' => $reg->dirigido,
                'email' => $reg->email,
                'fecha_inicio' => substr($reg->fecha_inicio,0,10),
                'fecha_final' =>substr($reg->fecha_final,0,10),
                'usuario' => $reg->usuario               
            );
        }
        $results = array('data' => $data);
        return $data;
    }
    public static function getproyect ($id) {
        $lista = proyecto::where('usuario_id',$id)->get();
        $data = Array();
        foreach ($lista as $reg) {
            $data[] = array(                
                'id' => $reg->id,
                'nombre' => $reg->nombre,
                'descripcion' => $reg->descripcion,
                'repositorio' => $reg->repositorio,
                'dirigido' => $reg->dirigido,
                'email' => $reg->email,
                'fecha_inicio' => substr($reg->fecha_inicio,0,10),
                'fecha_final' =>substr($reg->fecha_final,0,10),
                'usuario' => $reg->usuario            
            );
        }
        $results = array('data' => $data);
        return $data;
    }
    public function usuario(){      
        return $this->belongsTo('App\usuario');
    }
}
