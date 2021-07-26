<!DOCTYPE html>
<html lang="es">
	<head>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/bootstrap-theme.css">
		<meta charset="UTF-8">
		<style>
				body{
					font-family: "Verdana", Times, serif;
				}
				#veryactive{
					color:white;
				}
				#mainbody{
					width:80%;
					margin-left:10%;
				}
		</style>
		<title>Mecanica Barahona</title>
                <link type="image/x-icon" href="imagenes/Car_with_Wrench_red_16.ico" rel="icon" />
	</head>
<body><?php
  include "lib/adaptador.php";
$link=Conectarse();
  
$sql = $_POST['consu'];

function displayTable($sql){
 
   //Creamos la conexión
   $server = "localhost";
   $user = "root";
   $pass = "root";
   $BD = "mecamotor";
   $conexion = mysqli_connect($server,$user,$pass,$BD);
   //generamos la consulta
   if(!$result = mysqli_query($conexion, $sql)) die();
 
   $rawdata = array();
   //guardamos en un array multidimensional todos los datos de la consulta
   $i=0;
 
   while($row = mysqli_fetch_array($result))
   {
       $rawdata[$i] = $row;
       $i++;
   }
 
   $close = mysqli_close($conexion);
 
   //DIBUJAMOS LA TABLA
 echo '<div class= "table-responsive">';
   echo '<table class="table table-striped table-hover table-bordered width="100%" style="text-align:center;">';
   $columnas = count($rawdata[0])/2;
   //echo $columnas;
   $filas = count($rawdata);
   //echo "<br>".$filas."<br>";
 
   //Añadimos los titulos
 
   for($i=1;$i<count($rawdata[0]);$i=$i+2){
      next($rawdata[0]);
      echo '<th class ="info"><b>'.key($rawdata[0])."</b></th>";
      next($rawdata[0]);
   }
 
   for($i=0;$i<$filas;$i++){
 
      echo '<tr class= "danger">';
      for($j=0;$j<$columnas;$j++){
         echo "<td>".$rawdata[$i][$j]."</td>";
 
      }
      echo "</tr>";
   }
 
   echo '</table>';
 echo '</div>';
}
if(empty($_POST) || $_POST["consu"] == ""){
     DIE("");
 }

?> 
<center>

    <h2><b><?php echo $sql; ?></b></h2> 
    <br><br>

</center> 
<?php
echo displayTable($sql);

//$result = mysql_query($consu)
//    or die("No es posible almacenar los datos en la tabla de la BD");
//
//$row = mysql_fetch_assoc($result);
//
//echo "<table border=\"1px\"><tr>";
//
//if($row) {
//	foreach($row as $key => $value) {
//		echo "<th>$value</th>";
//	}
//}
//
//echo "</tr>";
//
//while($row = mysql_fetch_assoc($result)) {
//   echo "<tr>";
//   foreach($row as $key => $value) {
//      echo "<td>$value</td>"; 
//   }
//   echo "</tr>";
//echo "</table>";
//}
  
  
?>

<div>
    <a class="btn btn-success btn-md" href="hacerConsulta.php" role="button">Volver a Consulta</a>  
</div>
</body>
</html>