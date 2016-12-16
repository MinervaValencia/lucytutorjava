<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Practica extends Model
{
    protected $table='practicas';

    protected $fillable=['id_tema','interfaz','encomienda','pista_default','elementos_totales','secuencia_inicial','secuencia_correcta'];

    public function tema(){
    	return $this->belongsTo('App\Tema');
    }


}
