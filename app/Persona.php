<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $fillable = [
    	'tipo_usuario','tipo_persona','documento_persona','nombres_persona','apellidos_persona'
    ];

    public function celulars(){
    	return $this->hasMany('App\Celular');
    }

    public function direccions(){
    	return $this->hasMnay('App\Direccion');
    }

    public function emails(){
    	return $this->hasMany('App\Email');
    }

    public function servicios(){
    	return $this->belongsToMany('App\Servicio','persona_servicio');
    }
}
