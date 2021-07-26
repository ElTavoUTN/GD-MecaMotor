<?php
  include "lib/adaptador.php";
$link=Conectarse();
  
 // $tabla = mysql_query("SELECT * FROM cliente ORDER BY nombrecliente ASC");


$legajoMeca = $_REQUEST['legajoMeca'];


echo $legajoMeca ."<br>";



$result=mysql_query("DELETE FROM mecanico WHERE legajoMecanico = '$legajoMeca';",$link)
		or die("No es posible almacenar los datos en la tabla de la BD");
 header("Location: mecanicos.php");
                    exit;


            
?>