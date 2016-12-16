@extends('layouts.app')

@section('content')

      Contenido de home  
  			<!-- <div class="panel panel-default">
  				<div class="panel-heading">Lucy</div>
  				<div class="panel-body">Contenido</div>
			</div>





										<ul class="sub-menu collapse" id="products">
                                            @foreach($temas as $tema)
                                                @if ($tema->id_tema_padre==null)
                                                @else
                                                    <li>
                                                        <a href="#"></i> {{ $tema->titulo}} <span class="arrow"></span></a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            
                                       



			 -->

<!--
<img src="avatarg.gif" alt="..." class="img-rounded">
<img src="avatarg.gif" alt="..." class="img-circle">
<img src="avatarg.gif" alt="..." class="img-thumbnail">
-->
@endsection
