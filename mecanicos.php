<!DOCTYPE html>
<?php
include "lib/adaptador.php";
$link = Conectarse();

$tabla2 = mysql_query("SELECT * FROM mecanico ");

?> 
<html lang="es">
    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-theme.css">
        <link href="css/bootstrap.min.css" rel="stylesheet">
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
                <button class="btn btn-success btn-md" data-toggle="modal" data-target="#miventana" role="button">Agregar Mecánico</button> 
                <button class="btn btn-danger btn-md" data-toggle="modal" data-target="#miventana2" role="button">Eliminar Mecánico</button>  
<!-- agregar mecanico -->
                <div class="modal fade" id="miventana" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">Agregar Mecánico</h4>
                            </div>
                            <div class="modal-body">
                                <form class="form-horizontal" method="post" action="agregaMecanico.php">
                                    <div class="form-group">
                                        <label for="nombreM" class="col-lg-2 control-label">Nombre del Mecánico:</id></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="nombreM" placeholder="Ingrese del Mecánico" required autofocus  style="width:300px;"></input> <br>
                                        </div>

                                        <label for="dniM" class="col-lg-2 control-label">DNI Mecánico: </id></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="dniM" placeholder="Ingrese DNI del Mecánico" required autofocus  style="width:300px;"></input> <br>
                                        </div>                

                                        <label for="fechaN" class="col-lg-2 control-label">Fecha de Nacimiento:</id></label>
                                        <div class="col-lg-10">
                                            <input type="date" class="form-control" name="fechaN" placeholder="Ingrese fecha de nacimiento" required autofocus  style="width:300px;"></input><br>
                                        </div>  

                                        <label for="cuilM" class="col-lg-2 control-label">Cuil del Mecánico: </id></label> 
                                        <div class="col-lg-10">  
                                            <input type="text" class="form-control" name="cuilM" placeholder="Ingrese cuil" required autofocus  style="width:300px;"></input> <br>
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
<div class="modal fade" id="miventana2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">Eliminar Mecánico</h4>
                            </div>
                            <div class="modal-body">
                                <form class="form-horizontal" method="post" action="deleteMecanico.php">
                                    <div class="form-group">
                                        
                                        
                                            <label for="legajoMeca" class="col-lg-2 control-label">Número de Patente:</label>
                                            <div class="col-lg-10">
                                                <select class="form-control" name="legajoMeca"  required autofocus  style="width:300px;">
                                                    <option value="" selected="">Eliminar a:</option>
                                                    <?php while ($arreglo = mysql_fetch_array($tabla2)) { ?>

                                                        <option value="<?php echo $arreglo['legajoMecanico'] ?>" required autofocus  style="width:300px;"><?php echo $arreglo['nombreMecanico'] ?> </option>
                                                    <?php } ?>

                                                </select>

                                            </div>
                                        
                                                      
                                        
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                        <button type="submit" class="btn btn-danger" >Eliminar</button>
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
                                <th>Nombre del Mecánico</th>
                                <th>DNI Mecánico</th>
                                <th>Fecha de Nacimiento</th>
                                <th>Cuil del Mecánico</th>
                                <th>Legajo</th>
                                
                            </tr>
                        </thead>
                        <tbody ><?php
                            

                            $tabla = mysql_query("SELECT * FROM mecanico");
                            while ($filaTabla = mysql_fetch_array($tabla)) {
                                ?> 

                                <tr>
                                    <td><?php echo $filaTabla['nombreMecanico'] ?></td>
                                    <td><?php echo $filaTabla['dniMecanico'] ?></td>
                                    <td><?php echo $filaTabla['fechaNacimiento'] ?></td>
                                    <td><?php echo $filaTabla['cuilMecanico'] ?></td>
                                    <td><?php echo $filaTabla['legajoMecanico'] ?></td>
                                    
                                    
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