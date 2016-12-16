@extends('temas.tema')

@section('contenttemadetalle')

<table cellpadding="100px" ="50" width="100%" border="0px">
	<tr>
		<td>
			<h2>
				Ejemplo de programas con estructura secuencial
			</h2>
			<p>Están conformados por estatutos simples (asignación, incremento, break, llamadas a métodos o funciones) y bloques de instrucción delimitados por llaves {}.</p>
		</td>
	</tr>
	

	<tr>
		<td>
			<textarea class="codemirror-textarea">    	
				public class EjemplosErroneos {
				    public static void main(String[] args) {
				     System.out.println("Hola Mundo");    
				    }
				}
			</textarea>
		</td>
	</tr>



</table>
@endsection