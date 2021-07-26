<!DOCTYPE html>
<?php
  include "lib/adaptador.php";
$link=Conectarse();
  
 // $tabla = mysql_query("SELECT * FROM cliente ORDER BY nombrecliente ASC");

$cuilP = $_REQUEST['cuilP'];
$nombreP = $_REQUEST['nombreP'];
$direP = $_REQUEST['direP'];
$telefonoP = $_REQUEST['telefonoP'];

$result=mysql_query("INSERT INTO proveedor(cuil_cuitProveedor,nombreProveedor,direccionProveedor,telefonoProveedor)
VALUES('$cuilP','$nombreP','$direP','$telefonoP'); ",$link)
		or die("No es posible almacenar los datos en la tabla de la BD");
 header("Location: proveedor.php");
                    exit;




            
?> 
