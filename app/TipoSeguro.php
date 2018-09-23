<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoSeguro extends Model
{
    protected $fillable = [
    	'nombre','slug'
    ];

    public function documento(){
    	return $this->hasMany('App\Documento');
    }
}
