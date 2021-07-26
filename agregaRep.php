<!DOCTYPE html>
<?php
  include "lib/adaptador.php";
$link=Conectarse();
  
 // $tabla = mysql_query("SELECT * FROM cliente ORDER BY nombrecliente ASC");

$cantRep = $_REQUEST['cantRep'];
$descripcion = $_REQUEST['descripcion'];
$marcaR = $_REQUEST['marcaR'];
$nombreR = $_REQUEST['nombreR'];

$result=mysql_query("INSERT INTO repuesto(codigoRepuesto,cantidadRepuesto,descripcion,marcaRepuesto,nombreRepuesto)
VALUES(DEFAULT,'$cantRep','$descripcion','$marcaR','$nombreR'); ",$link)
		or die("No es posible almacenar los datos en la tabla de la BD");
 header("Location: repuesto.php");
                    exit;




            
?>