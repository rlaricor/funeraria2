<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Pago extends Model
{
    protected $dates = [
    	'fecha_pago'
    ];

    protected $fillable = [
    	'servicio_id','pago','fecha_pago','observacion_pago','user_id'
    ];

    public function servicio(){
    	return $this->belongsTo('App\Servicio');
    }

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function formatofecha(){
    	return $this->fecha_pago->format('d-m-y');
    }
}
