@extends('temas.tema')

@section('contenttemadetalle')

<table cellpadding="100px" ="50" width="100%" border="0px">
	<tr><td><h2>Programas con estructura secuencial</h2>
			<p>Están conformados por estatutos simples (asignación, incremento, break, llamadas a métodos o funciones) y bloques de instrucción delimitados por llaves {}.</p>
		</td>
	</tr>
	

	<tr><td ><h4> Instrucción (estatuto simple o sentencia)</h4>				
		<p>Una instrucción forma una completa unidad de ejecución.  
		Los siguientes tipos de expresiones pueden ser convertidas en instrucciones finalizando la expresión con un punto y coma, ( ; ).</p>
		<UL>
			<LI> Expresiones de asignación   			  ====>		cont = 0; 		</LI>
			<LI> Cualquier uso de ++ ó --    			  ====> 	totalMujeres++;	</LI>
			<LI> Llamadas a métodos. 	   				  ====> 	Math.pow(x,2);	</LI>
			<LI> Expresiones de creación  de objetos.     ====> 	new String();</LI>
		</UL>			
		</td>
	</tr>

	<tr><td><h4> Bloque</h4>	
		<p>Un bloque es un grupo de cero o más instrucciones entre llaves balanceadas (que abren y cierran) y se utilizan para agrupar instrucciones. </p>
		<p>A continuación se muestra un fragmento de código correspondiente a una instrucción simple, seguida de un bloque que contiene a su vez dos instrucciones simples. Y finalmente otra instrucción simple </p>
		</td>
	</tr>
	<tr><td>
		<textarea class="codemirror-textarea">    	
			aChar = ‘x’;
			if (Character.isUpperCase(aChar)) {
			     System.out.println(("Respuesta verdadera"); 
			     System.out.println("El caracter " + aChar + " es mayúscula"); 
			}
			System.out.println ("Continua la ejecución");
		</textarea>
		</td>		
	</tr>
</table>
@endsection