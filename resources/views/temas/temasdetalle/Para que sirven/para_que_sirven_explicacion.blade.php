
@extends('temas.tema')

@section('contenttemadetalle')

<table cellpadding="100px" ="50" width="100%" border="0px">
	<tr>
		<td>
			<h2>
				¿Para que sirven las estructuras de control de flujo?
			</h2>
			<p>Las estructuras de control de flujo permiten al programador dirigir la ejecución del programa por diferentes rutas o realizar repetidamente ciertas instrucciones.</p>
		</td>
	</tr>
	<tr>
		<td align="center">
			<h3>Un programa puede presentar estos tres tipos de flujos</h3>
		</td>
	</tr>
	<tr>
		<td>  
			<h4>Flujo secuencial</h4>	
			<p>Es aquel programa que no utiliza ninguna estructura de control de flujo.</p>
			<p>
			Supongamos un flujo secuencial para un problema cotidiano de lavarse las manos.	
			</p>
		</td>
	</tr>
	<tr align="center">
		<td>
			<img src="/imagenes/para_que_sirven_explicacion/secuencial.png" align="center" width="60%"  class="img-responsive">	
		</td>
	</tr>
	<tr>
		<td>
			<h4>Flujo Condicional</h4>
			<p>Es aquel programa que dependiendo del cumplimiento de una condición elige la ruta a seguir.
			</p>
			<p>
			Al mismo problema cotidiano anterior de lavarse las manos, le agregaremos el uso de una condición.	
			</p>
		</td>
	</tr>
	<tr align="center">
		<td>
			<img src="/imagenes/para_que_sirven_explicacion/condicional.png" align="center" width="60%"  class="img-responsive">	
		</td>
	</tr>
	<tr>
		<td ><h4>Flujo Repetitivo</h4>				
			<p>Es aquel programa que mediante el cumplimiento de una condición realiza repetidamente una instrucción o un bloque de instrucciones.</p>
			<p>Supongamos el ejemplo de un trabajador que pide que se le realice su pago.</p>
		</td>
	</tr>
	<tr align="center">
		<td>
			<img src="/imagenes/para_que_sirven_explicacion/iterativo.png" align="center" width="60%"  class="img-responsive">	
		</td>
	</tr>	
</table>
@endsection