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
	</head>
<body>
<section>		
			<nav class="navbar navbar-inverse" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-9">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" id="veryactive" href="system.php">Inicio</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-9">
          <ul class="nav navbar-nav">
            
              <li><a href="cliente.php">Clientes</a></li>
	    <li><a href="servicios.php">Servicios</a></li>
	    <li><a href="Proveedores.php">Proveedores de Herramientas</a></li>
	    <li><a href="Ordenes.php">Solicitudes y Ordenes de reparación</a></li>
            <li><a href="About.php">Integrantes</a></li>
	    <li><a href="index.HTML">Salir</a></li>

			
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
</section>

<div class="jumbotron">
    <center>
        <div>
        
        <a  class="btn btn-primary btn-md" href="system.php" role="button">Volver</a>
    </div>
        </center>
      <div class="container">
        <h1>MecaMotor</h1>
        <br><br><a  class="btn btn-primary btn-md" href="agregarServicio.php" role="button">Agregar nuevo Servicio</a> 
        <br><br>
    <table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>Número de Servicio</th>
      <th>Nombre de Servicio</th>
    </tr>
  </thead>
  <tbody ><?php
  include "lib/adaptador.php";
$link=Conectarse();
  
  $tabla = mysql_query("SELECT * FROM servicio");
            while ($filaTabla = mysql_fetch_array($tabla)) {
?> 
     
    <tr>
      <td><?php echo $filaTabla['nroServicio'] ?></td>
      <td><?php echo $filaTabla['nombreServicio'] ?></td>
     
    </tr>
    
  </tbody>
<?php } ?> 
        </table> 
      </div>
    </div>
    
    
</body>
</html>