<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    protected $fillable = [
    	'persona_id','direccion'
    ];

    public function Persona(){
    	return $this->belongsTo('App\Persona');
    }
}
