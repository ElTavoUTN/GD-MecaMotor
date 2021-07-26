<?php
include "lib/adaptador.php";
$link = Conectarse();

$nombreS = $_REQUEST['nombreS'];




	

$result=mysql_query("INSERT INTO servicio (nroServicio,nombreServicio,fechaIngreso,fechaServicio,fechaSalida,precio,numeroPatente,nroMotor,estadoServicio)
VALUES(DEFAULT,'$nombreS',NULL,NULL,NULL,NULL,NULL,NULL,NULL); ",$link)
		or die("No es posible almacenar los datos en la tabla de la BD");
 header("Location: agregarServicio.php");
                    exit;
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

?>


*/