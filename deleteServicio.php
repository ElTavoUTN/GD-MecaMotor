
<!DOCTYPE html>
<?php
  include "lib/adaptador.php";
$link=Conectarse();
  
 // $tabla = mysql_query("SELECT * FROM cliente ORDER BY nombrecliente ASC");

$nroServicio = $_REQUEST['nroServicio'];

//echo $nroServicio;

$result=mysql_query("DELETE FROM servicio WHERE nroServicio = '$nroServicio';  ",$link)
		or die("No es posible almacenar los datos en la tabla de la BD");
 header("Location: Ordenes.php");
                    exit;




            
?>