<?php 
// Este archivo sera el encargado de realizar la conexion con la BD
function Conectarse()
{
	if ($link = @mysql_connect("localhost","root"))
        
        { //direccion , user BD , pass BD
		//Pregunta si se ingreso datos distintos, si es asi lo indica.
		//echo "<p>Los datos de conexion son correctos.</p>";
		
	} else{ // si los datos son incorrectos, lo indica y se detiene completamente
		echo "<p>Error de conexion a la base de datos</p>.";
		exit();
	}
	if(@mysql_select_db("mecamotor", $link)){ //nombre BD
			//Verifica si la BD existe
			//Si existe, lo indica
			// "Establece la base de datos activa actual en el servidor 
			// asociado con el identificador de enlace especificado ($link)"
		//echo "<p>La BD seleccionada es correcta.</p>";
		
	} else{ // si no existe, lo indica y se detiene completamente
			echo "Error seleccionando la base de datos.";
			exit();
	}
	
	return $link;
}

?>
