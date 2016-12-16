<?php

namespace App\Http\Controllers;

//Para que funcione una busqueda por db::select
use Illuminate\Support\Facades\DB;

//Para que funciona uan paginación.
use Illuminate\Pagination\LengthAwarePaginator;

use Illuminate\Http\Request;
use App\Tema;
use App\TemaDetalle;

use Tail;

class MPedagogicoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function tema($id)
    {

       // Tail::add('queue-name', 'message');

    	$temas = Tema::all();
	   	//$temasdetalle = TemaDetalle::OrderBy('id','ASC')->paginate(1);
	   	//$temasdetalle = DB::select('select * from temasdetalle where id_tema  = ?', [$id])->get()->paginate(1);

	   	//Cuando quieres obtener los registros que comiencen con algo
	   	$temasdetalle = DB::table('temasdetalle')->where('id_tema', '=', $id)->orderBy('orden','asc')->get();
    	
	   	$tema = Tema::find($id);

	   	$temapadre=Tema::find($tema->id_tema_padre);

        $temadetalle = TemaDetalle::find($temasdetalle[0]->id);
        
        if (strlen($temasdetalle[0]->mensaje)>0){
            flash($temasdetalle[0]->mensaje, 'info');    
        }
        
		//$results = DB::table('blogs')->where('blogtitle', 'LIKE', '%'. $term .'%')->orWhere('tags', 'LIKE', '%'. $term .'%')->orderBy('id', 'desc')->paginate(15);
        

        //Tomo el primer elemento de temasdetalle y mando a llamar a la vista temas.temasdetalle.url
	   	return view('temas.temasdetalle.'.$tema->titulo.".".$temasdetalle[0]->url,[ 'id'=>$id,'temas' => $temas,'temasdetalle'=>$temasdetalle, 'tema'=>$tema, 'temapadre'=>$temapadre, 'temadetalle'=>$temadetalle]); 




        /*return view('temas.tema',[ 'id'=>$id,'temas' => $temas,'temasdetalle'=>$temasdetalle, 'tema'=>$tema, 'temapadre'=>$temapadre]);*/ 

    }

	public function temadetalle($id)
    {	    	

    	//Para la plantilla
    	$temas = Tema::all();

    	//Para Temas
    	//url
    	$temadetalle = TemaDetalle::find($id);

		//temasdetalle
		$temasdetalle =  DB::table('temasdetalle')->where('id_tema', '=', $temadetalle->id_tema)->orderBy('orden','asc')->get();

    	//tema
		$tema = Tema::find($temadetalle->id_tema);

		//temapadre
		$temapadre=Tema::find($tema->id_tema_padre);
    	
    	//Si el temadetalle es Explicacion o si es ejemplo se muestra la URL correspondiente
    	//tablaCampo temasdetalle->tiposubtema (1:Explicacion   2:Ejemplo   3:Practica)
    	//En caso que el tema detalle sea una práctia, se debe utilizar la vista correspondiente al tipo de práctica.
    	//tablaCampo practicas->interfaz (1:Drag&drop 2:Codigo  3:Drag&drop con opciones)
        $tiposubtema = (int) $temadetalle->tipo_subtema;
        //dd($tiposubtema);
		if (!empty($temadetalle->mensaje)){
            flash($temadetalle->mensaje, 'info');
        }
        if ($tiposubtema==1 || $tiposubtema==2) {
      	    //print ("entro en el if");
        	return view('temas.temasdetalle.'.$tema->titulo.".".$temadetalle->url,['temadetalle'=>$temadetalle,'temapadre'=>$temapadre, 'tema'=>$tema,'temasdetalle'=>$temasdetalle,'temas'=>$temas]);
		}else{
            //print('entro en el else');
			return view('codigo.codigo',['temadetalle'=>$temadetalle,'temapadre'=>$temapadre, 'tema'=>$tema,'temasdetalle'=>$temasdetalle,'temas'=>$temas]);
		}

    }
}
