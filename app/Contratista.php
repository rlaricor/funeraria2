<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contratista extends Model
{
    protected $fillable = [
    	'nombre','slug'
    ];

    public function Servicio(){
    	return $this->belongsTo('App\Servicio');
    }
}
