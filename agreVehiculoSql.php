<?php
include "lib/adaptador.php";
$link = Conectarse();

$modeloV = $_REQUEST['modeloV'];
$nroPatente = $_REQUEST['nroPatente'];
$pesoV= $_REQUEST['pesoV'];
$nroChasis= $_REQUEST['nroChasis'];
$nombreMarca= $_REQUEST['nombreMarca'];
$cantCilindros = $_REQUEST['cantCilindros'];
$tipoMotor= $_REQUEST['tipoMotor'];
$nroMotor = $_REQUEST['nroMotor'];
$cuilC= $_REQUEST['cuilC'];



//
echo $cuilC ."<br>"; 
//echo $nroChasis ."<br>";
//echo $nroMotor ;

$result=mysql_query("INSERT INTO vehiculo(modeloVehiculo,numeroPatente,pesoVehiculo,nroChasis,nombreMarca,cantCilindros,tipoMotor,nroMotor,cuil_cuitCliente)
VALUES('$modeloV','$nroPatente','$pesoV','$nroChasis','$nombreMarca','$cantCilindros','$tipoMotor','$nroMotor','$cuilC'); ",$link)
		or die("No es posible almacenar los datos en la tabla de la BD");
 header("Location: vehiculo.php");
                    exit;


	

/*   	//recorremos el array de cervezas seleccionadas. No olvidarse q la primera posición de un array es la 0 

   	for ($i=0;$i<count($nombreServicios);$i++) 
      	{ 
      	echo "<br> nombreServicio " . $i . ": " . $nombreServicios[$i]; 
      	        
        }
        for ($i2=0;$i2<count($estadoServicio);$i2++)
        {
            echo "<br> estado servicio " . $i2 . ": " . $estadoServicio[$i2];
        }
//-----------Echo's para la tabla de valores de testeo
echo "<table border=\"1px\">";
echo "<tr>";
echo "<td>Valores de Testeo</td>";
echo "<td>";

echo $nombreC . "<br>";
echo $fechaI . "<br>";
echo $fechaSer . "<br>";
echo $fechaSal . "<br>";
echo $precio . "<br>";
echo $nroPatente . "<br>";
echo $nroMotor . "<br>";
echo $nombreServicios . "<br>";
echo $estadoServicio . "<br>";
//-----------Echo's para la tabla de valores de testeo
echo "</td>";
echo "</tr>";
echo "</table>";

//Almacenamos los datos en la Tabla table_proyectos

$result=mysql_query("INSERT into servicio (,nombreServicio,fechaIngreso,fechaServicio,fechaSalida,precio,numeroPatente,nroMotor,estadoServicio) "
        . "values (DEFAULT,'$nombreServicios','$fechaI','$fechaSer','$fechaSal','$precio','$nroPatente', '$nroMotor', '$estadoServicio') ",$link)
		or die("No es posible almacenar los datos en la tabla de la BD");

	/*	if ($filas=mysql_affected_rows()>0){
			echo "Insercion exitosa.";
		
			$result1=mysql_query("CREATE TABLE ".$wnombre." (
			 tb_".$wnombre."_id INT(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT PRIMARY KEY,
			 tb_".$wnombre."_descripcion TEXT NOT NULL,
			 tb_".$wnombre."_creacion DATE NOT NULL,
			 tb_".$wnombre."_modificacion DATE NOT NULL,
			 tb_".$wnombre."_estado INT(1) UNSIGNED NOT NULL)"
		    );

		}
*/
?>

