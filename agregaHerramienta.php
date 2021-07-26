<!DOCTYPE html>
<?php
  include "lib/adaptador.php";
$link=Conectarse();
  
 // $tabla = mysql_query("SELECT * FROM cliente ORDER BY nombrecliente ASC");

$nombreH = $_REQUEST['nombreH'];
$cantH = $_REQUEST['cantH'];
$nroH = $_REQUEST['nroH'];

$result=mysql_query("INSERT INTO herramienta(nombreHerramienta,cantHerramienta,nroHerramienta)
VALUES('$nombreH','$cantH','$nroH'); ",$link)
		or die("No es posible almacenar los datos en la tabla de la BD");
 header("Location: herramienta.php");
                    exit;




            
?>