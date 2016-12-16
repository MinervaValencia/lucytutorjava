@extends('layouts.app')

@section('content')

<nav class="navbar navbar-inverse">
<div class="nav-side-tema">
 	<div class="container-fluid">
	    <br>
	    <div>
	        <!-- <p> [{{$temapadre->titulo }}] /  [ <span class="label label-default"> {{$tema->titulo}} </span>] : {{$tema->objetivo}} </p>-->
	           &#9654 {{$tema->titulo}} &#9654 {{ $temadetalle->orden}}.- {{ $temadetalle->label}}<br><br> 
	    </div>
	</div>
</div>
<div class="container">
	<ul class="pagination">
		<!--<li>
	      <a href="#" aria-label="Previous">
	        <span aria-hidden="true">&laquo;</span>
	      </a>
	    </li>-->
			@foreach($temasdetalle as $temadetalle)
				<li><a href="/tema/temadetalle/{{$temadetalle->id}}"> {{ $temadetalle->orden}}.- {{ $temadetalle->label}}</a> </li>
			@endforeach  
			
	    <!--<li>
	      <a href="#" aria-label="Next">
	        <span aria-hidden="true">&raquo;</span>
	      </a>
	    </li>-->
	</ul>	
</div>
<div class="nav-side-temaexpo">
	<div class="container-fluid">
		@yield('contenttemadetalle')
	</div>
</div>
</nav>



@endsection

