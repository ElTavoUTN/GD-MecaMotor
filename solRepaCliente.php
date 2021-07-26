<?php
include "lib/adaptador.php";
$link = Conectarse();

$nombreS = $_REQUEST['nombreS'];
$fechaI = $_REQUEST['fechaI'];
$fechaSer = $_REQUEST['fechaSer'];
$fechaSal = $_REQUEST['fechaSal'];
$precio = $_REQUEST['precio'];
$nroPatente = $_REQUEST['nroPatente'];
$nroMotor = $_REQUEST['nroMotor'];
$estadoServicio = $_REQUEST['estadoServicio'];

//echo $fechaI."<br>";
//
//echo $fechaSer."<br>";
//
//echo $fechaSal ."<br>";
//
//echo $nroPatente ."<br>";
//
//echo $nroMotor."<br>";
// 
//echo $estadoServicio."<br>";


$result=mysql_query("INSERT INTO servicio (nombreServicio, fechaIngreso, fechaServicio, fechaSalida, precio, numeroPatente, nroMotor, estadoServicio) 
VALUES ('$nombreS', '$fechaI', '$fechaSer', '$fechaSal', '$precio', '$nroPatente', '$nroMotor', '$estadoServicio'); ",$link)
		or die("No es posible almacenar los datos en la tabla de la BD");

		 header("Location: Ordenes.php");
                    exit;


?>
