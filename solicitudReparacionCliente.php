<!DOCTYPE html>
<?php
  include "lib/adaptador.php";
$link=Conectarse();
  
  $tabla = mysql_query("SELECT * FROM cliente ORDER BY nombrecliente ASC");
  $tabla2 = mysql_query("SELECT * FROM estadoservicios ORDER BY estadoServicio ASC");
            
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

        <form class="form-horizontal" method="post" action="solRepaCliente.php">
  <fieldset>
    <legend>Solicitud Reparación Cliente</legend>
    <div class="form-group">
      <label for="select" class="col-md-2 control-label">Nombre de Cliente</label>
      <div class="col-lg-10">
        <select class="form-control" name="nombreC"  required autofocus  style="width:300px;">
          <option value="" selected="">Elige una opción:</option>
            <?php while ($arreglo = mysql_fetch_array($tabla)){?>
            
            <option value="<?php echo $arreglo['cuil_cuitCliente']?>"><?php echo $arreglo['nombreCliente']?> </option>
          <?php }?>
            
        </select>
          
      </div>
    </div>
    <div class="form-group">
        <label for="nombreS" class="col-lg-2 control-label">Nombre Servicio:</id></label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="nombreS" placeholder="Ingrese el nombre del Cliente" required autofocus  style="width:300px;"></input> <br>
      </div>
      
        <label for="fechaI" class="col-lg-2 control-label">Fecha Ingreso:</id></label>
      <div class="col-lg-10">
          <input type="date" class="form-control" name="fechaI" placeholder="Ingrese fecha de ingreso" required autofocus  style="width:300px;"></input><br>
      </div>  
      
        <label for="fechaSer" class="col-lg-2 control-label">Fecha Servicio: </id></label> 
      <div class="col-lg-10">  
      <input type="date" class="form-control" name="fechaSer" placeholder="Ingrese fecha de servicio" required autofocus  style="width:300px;"></input> <br>
        </div>
        <label for="fechaSal" class="col-lg-2 control-label">Fecha Salida: </id></label>
      <div class="col-lg-10">
       <input type="date" class="form-control" name="fechaSal" placeholder="Ingrese fecha de salida" required autofocus  style="width:300px;"></input> <br>
      </div>                
      <label for="precio" class="col-lg-2 control-label">Precio: </id></label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="precio" placeholder="Ingrese precio" required autofocus  style="width:300px;"></input> <br>
      </div>               
      <label for="nroPatente" class="col-lg-2 control-label">Número Patente: </id></label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="nroPatente" placeholder="Ingrese número patente" required autofocus  style="width:300px;"></input> <br>
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
      <label for="selectEstado" class="col-lg-2 control-label">Estado del servicio</label>
      <div class="col-lg-10">
          <select class="form-control" name="estadoServicio"  required autofocus  style="width:300px;">
          <option value="" selected="">Elige una opción:</option>
              <?php while ($arreglo2 = mysql_fetch_array($tabla2)){?>
            
            <option value="<?php echo $arreglo2['estadoServicio']?>" required autofocus  style="width:300px;"><?php echo $arreglo2['descripcion']?> </option>
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
        <a  class="btn btn-primary btn-md" href="Ordenes.php" role="button">Volver a Ordenes</a>
    </div>
    </center>    
    </body>
</html>
