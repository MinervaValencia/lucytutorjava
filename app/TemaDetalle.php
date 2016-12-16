<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemaDetalle extends Model
{
    protected $table = "temasdetalle";
    protected $fillable = [
        'id_tema', 'id_practica', 'orden', 'tipo_subtema','url','label','mensaje'
    ];

    public function tema(){
    	return $this->belongsto('App\Tema');
    }

}
