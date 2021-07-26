<!DOCTYPE html>
<?php
include "lib/adaptador.php";
$link = Conectarse();

$tabla = mysql_query("SELECT * FROM cliente ORDER BY nombrecliente ASC");
?> 
<html lang="es">
    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-theme.css">
        <link rel="stylesheet" href="css/bootstrap.min.css" >
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale-1">
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
                            <!--  <li><a href="servicios.php">Servicios</a></li>-->
                            <li><a href="vehiculo.php">Vehiculos</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Proveedores y mecánicos <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="proveedor.php">Proveedores de Repuestos</a></li>
                                    <li><a href="repuesto.php">Repuestos</a></li>
                                    <li><a href="herramienta.php">Herramientas</a></li>
                                    <li class="divider"></li>
                                    <li><a href="mecanicos.php">Mecánicos</a></li>

                                </ul>
                            </li>

                            <li><a href="Ordenes.php">Solicitudes y Ordenes de reparación</a></li>
                            <li><a href="hacerConsulta.php">Hacer Consulta</a></li>
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
                <button class="btn btn-success btn-md" data-toggle="modal" data-target="#miventana" role="button">Agregar Vehículo</button>  
                <div class="modal fade" id="miventana" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">Agregar Vehículo</h4>
                            </div>
                            <div class="modal-body">
                                <form class="form-horizontal" method="post" action="solRepaCliente.php">
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
                                        <div class="form-group">
                                            <label for="select" class="col-md-2 control-label">Nombre de Clientes</label>
                                            <div class="col-lg-10">
                                                <select class="form-control" name="cuilC"  required autofocus  style="width:300px;">
                                                    <option value="" selected="">Elige:</option>
<?php while ($arreglo = mysql_fetch_array($tabla)) { ?>

                                                        <option value="<?php echo $arreglo['cuil_cuitCliente'] ?>"><?php echo $arreglo['nombreCliente'] ?> </option>
<?php } ?>

                                                </select>

                                            </div>
                                        </div>


                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                        <button type="submit" class="btn btn-primary" >Guardar Cambios</button><!-- <a  class="btn btn-primary" href="agreCliente.php" role="button">Guadar Cambios</a> -->
                                    </div>
                                </form>  
                            </div>

                        </div>
                    </div>

                </div>

                <br><br>
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered ">
                        <thead>
                            <tr>
                                <th>Modelo Vehículo</th>
                                <th>Número Patente</th>
                                <th>Peso Vehículo</th>
                                <th>Número de Chasis</th>
                                <th>Nombre Marca</th>
                                <th>Cantidad de cilindros</th>
                                <th>Tipo Motor</th>
                                <th>Número Motor</th>
                                <th>cuil/cuit del Cliente</th>
                                <th>Nombre del Cliente</th>
                            </tr>
                        </thead>
                        <tbody ><?php
$tabla2 = mysql_query("SELECT * FROM vehiculo AS v, cliente AS c WHERE v.cuil_cuitCliente = c.cuil_cuitCliente ");
while ($filaTabla = mysql_fetch_array($tabla2)) {
    ?> 

                                <tr>
                                    <td><?php echo $filaTabla['modeloVehiculo'] ?></td>
                                    <td><?php echo $filaTabla['numeroPatente'] ?></td>
                                    <td><?php echo $filaTabla['pesoVehiculo'] ?></td>
                                    <td><?php echo $filaTabla['nroChasis'] ?></td>
                                    <td><?php echo $filaTabla['nombreMarca'] ?></td>
                                    <td><?php echo $filaTabla['cantCilindros'] ?></td>
                                    <td><?php echo $filaTabla['tipoMotor'] ?></td>
                                    <td><?php echo $filaTabla['nroMotor'] ?></td>
                                    <td><?php echo $filaTabla['cuil_cuitCliente'] ?></td>
                                    <td><?php echo $filaTabla['nombreCliente'] ?></td>
                                </tr>

                            </tbody>
<?php } ?> 
                    </table> 
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery.js"></script>	  
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>	
        <script src="js/bootstrap.min.js"></script>    
        
    </body>
</html>
