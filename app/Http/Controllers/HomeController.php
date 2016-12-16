<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tema;
use Laracasts\Flash\Flash;

class HomeController extends Controller
{

    /**
    *Laravel 5.3, PHP, HTML, Java script, .CSS, Botstrap, flash de laracast,  -->
    * PENDIENTES:
    *Falta que la migración de temas especifique que la tabla de temas acepte en 
    *id_tema_padre valor null.
    *Falta que la migración de temasdealle especifique que la tabla  
    *temasdetalle acepte 
    *en id_practica valor null 
    */




    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $temas = Tema::all();
        
        //flash('Prueba de mensaje');
        //flash('Prueba 2 de mensaje', 'info');
        
        //flash('Prueba3 abcdefghijklmnñopqrstuvwxyz1 abcdefghijklmnñopqrstuvwxyz2 abcdefghijklmnñopqrstuvwxyz1' , 'info');

        return view('home',['temas'=>$temas]);
    }
}
