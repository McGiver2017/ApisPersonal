<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tecnologia extends Model
{
    protected $fillable = ['nombre','tipotec_id','descripcion','creador'];
    public static function gettec () {
        $lista = tecnologia::all();
        $data = Array();
        foreach ($lista as $reg) {
            $data[] = array(                
                'id' => $reg->id,
                'nombre' => $reg->nombre,
                'descripcion' => $reg->descripcion,
                'creador' => $reg->creador,
                'tipotec' => $reg->tipotec               
            );
        }
        $results = array('data' => $data);
        return $data;
    }
    public function tipotec(){      
        return $this->belongsTo('App\tipotec');
    }
}
