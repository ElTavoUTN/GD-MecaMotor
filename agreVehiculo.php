<!DOCTYPE html>
<?php
  include "lib/adaptador.php";
$link=Conectarse();
  
  $tabla = mysql_query("SELECT * FROM cliente ORDER BY nombrecliente ASC");
  
            
?> 
<html>
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
	</head>
    <body>
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
        <form class="form-horizontal" method="post" action="agreVehiculoSql.php">
  <fieldset>
    <legend>Agregar Vehículos</legend>
    
    <div class="form-group">
        
        <label for="modeloV" class="col-lg-2 control-label">Modelo Vehículo:</id></label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="modeloV" placeholder="Ingrese el modelo de vehículo" required autofocus  style="width:300px;"></input> <br>
      </div>
        
      <label for="nroPatente" class="col-lg-2 control-label">Número Patente: </id></label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="nroPatente" placeholder="Ingrese número patente" required autofocus  style="width:300px;"></input> <br>
      </div>                
      
        <label for="pesoV" class="col-lg-2 control-label">Peso del Vehículo:</id></label>
      <div class="col-lg-10">
          <input type="text" class="form-control" name="pesoV" placeholder="Ingrese peso del Vehículo" required autofocus  style="width:300px;"></input><br>
      </div>  
      
        <label for="nroChasis" class="col-lg-2 control-label">Número de Chasis: </id></label> 
      <div class="col-lg-10">  
      <input type="text" class="form-control" name="nroChasis" placeholder="Ingrese número de chasis" required autofocus  style="width:300px;"></input> <br>
        </div>
        
        <label for="nombreMarca" class="col-lg-2 control-label">Nombre de Marca: </id></label>
      <div class="col-lg-10">
       <input type="text" class="form-control" name="nombreMarca" placeholder="Ingrese nombre de marca" required autofocus  style="width:300px;"></input> <br>
      </div>                
      <label for="cantCilindros" class="col-lg-2 control-label">Cantidad de cilindros: </id></label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="cantCilindros" placeholder="Ingrese cantidad de cilindros" required autofocus  style="width:300px;"></input> <br>
      </div>               
      <label for="tipoMotor" class="col-lg-2 control-label">Tipo de Motor: </id></label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="tipoMotor" placeholder="Ingrese tipo de motor" required autofocus  style="width:300px;"></input> <br>
      </div>                
      <label for="nroMotor" class="col-lg-2 control-label">Número Motor: </id></label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="nroMotor" placeholder="Ingrese número motor" required autofocus  style="width:300px;">  </input><br>
      </div>	
  <!--    <label for="estado" class="col-lg-2 control-label">Estado Servicio: </id></label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="estado" placeholder="Ingrese estado servicio" required autofocus  style="width:300px;">  </input><br>
      </div>             
        
    </div>
-->    
    <div class="form-group">
      <label for="select" class="col-md-2 control-label">Nombre de Clientes</label>
      <div class="col-lg-10">
        <select class="form-control" name="cuil_cuitCliente"  required autofocus  style="width:300px;">
            <option value="" selected="">Elige:</option>
            <?php while ($arreglo = mysql_fetch_array($tabla)){?>
            
            <option value="<?php echo $arreglo['cuil_cuitCliente']?>"><?php echo $arreglo['nombreCliente']?> </option>
          <?php }?>
            
        </select>
          
      </div>
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
            <a  class="btn btn-primary btn-md" href="vehiculo.php" role="button">Volver a Vehiculos</a>
    </div>
    </center>    
    </body>
</html>
