<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
	protected $table = "temas";
    protected $fillable = [
        'id_tema_padre', 'titulo', 'secuencia', 'objetivo'
    ];

  	public function tema(){
    	return $this->belongsTo('App\Tema');
  	}

  	public function practicas(){
  		return $this->hasMany('App\Practica');
  	}

  	public function temasdetalle(){
  		return $this->hasMany('App\TemaDetalle');
  	}
}




