<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipotec extends Model
{
    protected $fillable = ['nombre','descripcion'];
    public function tecnologias(){
        return $this->hasMany('App\tipotec');
    }
}
