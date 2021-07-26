<!DOCTYPE html>
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

        <form class="form-horizontal" method="post" action="agreServicio.php">
  <fieldset>
    <legend>Agregar Servicio</legend>
    
    <div class="form-group">
        <label for="nombreS" class="col-lg-2 control-label">Nombre Servicio:</id></label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="nombreS" placeholder="Ingrese el nombre del servicio nuevo" required autofocus  style="width:300px;"></input> <br>
      </div>
                      
        <div class="col-lg-10">
          <button type="submit" class="btn btn-primary">Agregar</button>
        
        <button type="reset" class="btn btn-default">Cancelar</button>
      </div>
    </div>
  </fieldset>
</form>
    <center>
        <div>
            <a  class="btn btn-primary btn-md" href="servicios.php" role="button">Volver a Servicios</a>
    </div>
    </center>    
    </body>
</html>
