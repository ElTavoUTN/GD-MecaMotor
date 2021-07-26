<!DOCTYPE html>
<?php
  include "lib/adaptador.php";
$link=Conectarse();
  
 // $tabla = mysql_query("SELECT * FROM cliente ORDER BY nombrecliente ASC");

$cuilC = $_REQUEST['cuilC'];
$nombreC = $_REQUEST['nombreC'];
$localidadC = $_REQUEST['localidadC'];
$calleC = $_REQUEST['calleC'];
$numeroC= $_REQUEST['numeroC'];
$telefono = $_REQUEST['telefono'];

$result=mysql_query("INSERT INTO cliente(cuil_cuitCliente,nombreCliente,localidad,calle,numero,telefonoCliente)
VALUES('$cuilC','$nombreC','$localidadC','$calleC','$numeroC','$telefono'); ",$link)
		or die("No es posible almacenar los datos en la tabla de la BD");
 header("Location: cliente.php");
                    exit;




            
?> 
<!-- <html>
    <head>
		<!-- Latest compiled and minified CSS -->
	<!-- 	<link rel="stylesheet" href="css/bootstrap.css">
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
	</head>
    <body> -->
<!--        este es el ejemplo
<form name="formProy" method="post" action="formularioProyecto_chk.php">
			
			<label for="nombre">*Nombre: </id>
			<input type="text" name="nombre" id="nombre" placeholder="Ingrese el nombre de su proyecto..." required autofocus  style="width:300px;"></input> <br>
			<label for="url">*Url de Imagen: </id>
			<input type="text" name="url" id="url"  required placeholder="Ingrese la URL de la imagen de su proyecto..." style="width:300px;"></input><br>
			<label for="descripcion">Breve descripcion: </id>
			<textarea name="descripcion" cols="40" rows="6" placeholder="Ingrese la descripcion de su proyecto..."   ></textarea><br>
			<label for="director">Director: </id>
			<input type="text" name="director" id="director" placeholder="Ingrese el nombre del director de proyecto..."  style="width:300px;"></input><br>
			<label for="nombre">Integrantes: </id>
			<input type="text" name="integrantes" id="integrantes" placeholder="Ingrese el nombre de los integrantes del proyecto..."  style="width:300px;"></input><br>
			

				<p><a class="btn btn-primary btn-lg" href="#" role="button">Agregar</a></p>
			<br><input type="submit" class="btn btn-primary btn-lg" value="Agregar">
			<input type="reset" class="btn btn-primary btn-lg" value="Limpiar">
			
</form>
        termina ejemplo de agreOrden, adaptarlo al de mas arriba y agregar el css que está abajo de este ejemplo
        -->
  <!-- si me equivoco de acá saco      <form class="form-horizontal" method="post" action="agreVehiculoSql.php">
  <fieldset>
    <legend>Agregar Cliente</legend>
    
    <div class="form-group">
        <label for="cuilC" class="col-lg-2 control-label">cuil_cuitCliente::</id></label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="cuilC" placeholder="Ingrese cuil/cuit del Cliente" required autofocus  style="width:300px;"></input> <br>
      </div>
        
      <label for="nombreC" class="col-lg-2 control-label">Nombre del Cliente: </id></label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="nombreC" placeholder="Ingrese nombre del Cliente" required autofocus  style="width:300px;"></input> <br>
      </div>                
      
        <label for="localidadC" class="col-lg-2 control-label">Localidad:</id></label>
      <div class="col-lg-10">
          <input type="text" class="form-control" name="localidadC" placeholder="Ingrese localidad" required autofocus  style="width:300px;"></input><br>
      </div>  
      
        <label for="calleC" class="col-lg-2 control-label">Calle: </id></label> 
      <div class="col-lg-10">  
      <input type="text" class="form-control" name="calleC" placeholder="Ingrese calle" required autofocus  style="width:300px;"></input> <br>
        </div>
        
        <label for="numeroC" class="col-lg-2 control-label">Número: </id></label>
      <div class="col-lg-10">
       <input type="text" class="form-control" name="numeroC" placeholder="Ingrese número" required autofocus  style="width:300px;"></input> <br>
      </div>                
      <label for="telefono" class="col-lg-2 control-label">Teléfono: </id></label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="telefono" placeholder="Ingrese número de teléfono" required autofocus  style="width:300px;"></input> <br>
      </div>               
   
     <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        
          <button type="submit" class="btn btn-primary">Agregar</button>
        
        <button type="reset" class="btn btn-default">Cancelar</button>
      </div>
    </div>
  </fieldset>
</form>
    <center>
        <div>
            <a  class="btn btn-primary btn-md" href="cliente.php" role="button">Volver a cliente</a>
    </div>
    </center>    
    </body>
</html>     -->