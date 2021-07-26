<!DOCTYPE html>
<?php
  include "lib/adaptador.php";
$link=Conectarse();
  
 // $tabla = mysql_query("SELECT * FROM cliente ORDER BY nombrecliente ASC");


$nombreM = $_REQUEST['nombreM'];
$dniM = $_REQUEST['dniM'];
$fechaN = $_REQUEST['fechaN'];
$cuilM= $_REQUEST['cuilM'];

echo $nombreM ."<br>";
echo $dniM ."<br>";
echo $fechaN ."<br>";
echo $cuilM ."<br>";


$result=mysql_query("INSERT INTO mecanico(nombreMecanico,dniMecanico,fechaNacimiento,cuilMecanico,legajoMecanico)
VALUES('$nombreM',$dniM,'$fechaN',$cuilM,DEFAULT); ",$link)
		or die("No es posible almacenar los datos en la tabla de la BD");
 header("Location: mecanicos.php");
                    exit;




            
?>