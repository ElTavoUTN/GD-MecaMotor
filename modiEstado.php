<!DOCTYPE html>
<?php
  include "lib/adaptador.php";
$link=Conectarse();
  
 

$nroServicio = $_REQUEST['nroServicio'];
$nroEstado = $_REQUEST['nroEstado'];

echo $nroServicio;
echo $nroEstado;

$result=mysql_query("UPDATE servicio SET estadoServicio = '$nroEstado' WHERE `nroServicio` = '$nroServicio';",$link)
		or die("No es posible almacenar los datos en la tabla de la BD");
 header("Location: Ordenes.php");
                    exit;




            
?>
