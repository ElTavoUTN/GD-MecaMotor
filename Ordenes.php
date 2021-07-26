<!DOCTYPE html>
<?php
include "lib/adaptador.php";
$link = Conectarse();

$tabla = mysql_query("SELECT * FROM servicio WHERE numeroPatente IS NOT NULL ORDER BY nroServicio ASC");
$tabla2 = mysql_query("SELECT * FROM estadoservicios ORDER BY estadoServicio ASC");
$tabla4 = mysql_query("SELECT * FROM servicio WHERE nroMotor IS NOT NULL ORDER BY nroServicio ASC");
$tab = mysql_query("SELECT nombreServicio, nroServicio FROM servicio ORDER BY nroServicio ASC");
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

                <button class="btn btn-success btn-md" data-toggle="modal" data-target="#miventana" role="button">Agregar Solicitud de Reparación Cliente</button>  
                <button class="btn btn-danger btn-md" data-toggle="modal" data-target="#miventana2" role="button">Eliminar Solicitud de Reparación Cliente</button>  
                <button class="btn btn-info btn-md" data-toggle="modal" data-target="#miventana3" role="button">Modificar Estado del Servicio</button>  
                <!--Agregar servicio -->                
                <div class="modal fade" id="miventana" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

                                <h4 class="modal-title">Solicitud Reparación Cliente</h4>
                            </div>
                            <div class="modal-body">
                                <form class="form-horizontal" method="post" action="solRepaCliente.php">
                                    <div class="form-group">

                                        <label for="nombreS" class="col-lg-2 control-label">Nombre Servicio:</id></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="nombreS" placeholder="Ingrese el nombre del Servicio" required autofocus  style="width:300px;"></input> <br>
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
                                        <div class="form-group">
                                            <label for="nroPatente" class="col-lg-2 control-label">Número de Patente:</label>
                                            <div class="col-lg-10">
                                                <select class="form-control" name="nroPatente"  required autofocus  style="width:300px;">
                                                    <option value="" selected="">Elige un número patente:</option>
                                                    <?php while ($arreglo2 = mysql_fetch_array($tabla)) { ?>

                                                        <option value="<?php echo $arreglo2['numeroPatente'] ?>" required autofocus  style="width:300px;"><?php echo $arreglo2['numeroPatente'] ?> </option>
                                                    <?php } ?>

                                                </select>

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="nroMotor" class="col-lg-2 control-label">Número Motor</label>
                                            <div class="col-lg-10">
                                                <select class="form-control" name="nroMotor"  required autofocus  style="width:300px;">
                                                    <option value="" selected="">Elige un número de motor:</option>
                                                    <?php while ($arreglo3 = mysql_fetch_array($tabla4)) { ?>

                                                        <option value="<?php echo $arreglo3['nroMotor'] ?>" required autofocus  style="width:300px;"><?php echo $arreglo3['nroMotor'] ?> </option>
                                                    <?php } ?>

                                                </select>

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="selectEstado" class="col-lg-2 control-label">Estado del servicio</label>
                                            <div class="col-lg-10">
                                                <select class="form-control" name="estadoServicio"  required autofocus  style="width:300px;">
                                                    <option value="" selected="">Estado:</option>
                                                    <?php while ($arreglo2 = mysql_fetch_array($tabla2)) { ?>

                                                        <option value="<?php echo $arreglo2['estadoServicio'] ?>" required autofocus  style="width:300px;"><?php echo $arreglo2['descripcion'] ?> </option>
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
                <!--Eliminar servicio -->

                <div class="modal fade" id="miventana2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

                                <h4 class="modal-title">Eliminar Servicio</h4>
                            </div>
                            <div class="modal-body">
                                <form class="form-horizontal" method="post" action="deleteServicio.php">
                                    <div class="form-group">

                                        <div class="form-group">
                                            <label for="nroServicio" class="col-lg-2 control-label">Estado del servicio</label>
                                            <div class="col-lg-10">
                                                <select class="form-control" name="nroServicio"  required autofocus  style="width:300px;">
                                                    <option value="" selected="">Servicio:</option>
                                                    <?php while ($arreg = mysql_fetch_array($tab)) { ?>

                                                        <option value="<?php echo $arreg['nroServicio'] ?>" required autofocus  style="width:300px;"><?php echo $arreg['nombreServicio'] ?> </option>
                                                    <?php } ?>

                                                </select>

                                            </div>
                                        </div>


                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                        <button type="submit" class="btn btn-danger" >Eliminar</button><!-- <a  class="btn btn-primary" href="agreCliente.php" role="button">Guadar Cambios</a> -->
                                    </div>
                                </form>  
                            </div>

                        </div>
                    </div>

                </div>
                <!--Modificar Estado -->

                <div class="modal fade" id="miventana3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

                                <h4 class="modal-title">Modificar Estado del Servicio</h4>
                            </div>
                            <div class="modal-body">
                                <form class="form-horizontal" method="post" action="modiEstado.php">
                                    <div class="form-group">

                                        <div class="form-group">
                                            <label for="nroServicio" class="col-lg-2 control-label">Estado del servicio</label>
                                            <div class="col-lg-10">
                                                <select class="form-control" name="nroServicio"  required autofocus  style="width:300px;">
                                                    <option value="" selected="">Servicio:</option>
                                                    <?php
                                                    $tab1 = mysql_query("SELECT nombreServicio, nroServicio FROM servicio ORDER BY nroServicio ASC");

                                                    while ($arre = mysql_fetch_array($tab1)) {
                                                        ?>

                                                        <option value="<?php echo $arre['nroServicio'] ?>" required autofocus  style="width:300px;"><?php echo $arre['nombreServicio'] ?> </option>
                                                    <?php } ?>

                                                </select>

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="nroEstado" class="col-lg-2 control-label">Estado del servicio</label>
                                            <div class="col-lg-10">
                                                <select class="form-control" name="nroEstado"  required autofocus  style="width:300px;">
                                                    <option value="" selected="">Estado:</option>
                                                        <?php 
                                                        $tab2 = mysql_query("SELECT * FROM estadoservicios ORDER BY estadoServicio ASC");
                                                        while ($arre2 = mysql_fetch_array($tab2)) { ?>

                                                        <option value="<?php echo $arre2['estadoServicio'] ?>" required autofocus  style="width:300px;"><?php echo $arre2['descripcion'] ?> </option>
                                                        
                                                            <?php } ?>

                                                </select>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                        <button type="submit" class="btn btn-info" >Modificar Estado</button>
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
                                <th>Nombre del Cliente</th>
                                <th>Nombre Servicio</th>
                                <th>Fecha Ingreso</th>
                                <th>Fecha Servicio</th>
                                <th>Fecha Salida</th>
                                <th>precio</th>
                                <th>Número Patente</th>
                                <th>Número Motor</th>
                                <th>Estado Servicio</th>
                            </tr>
                        </thead>
                        <tbody ><?php
                            //          $tabla = mysql_query("SELECT * FROM servicio AS s, cliente AS c, vehiculo AS v
//WHERE v.nroMotor= s.nroMotor AND s.numeroPatente= v.numeroPatente AND c.cuil_cuitCliente = v.cuil_cuitCliente");

                            $tabla3 = mysql_query("SELECT DISTINCT(c.nombreCliente),s.nombreServicio,s.nroServicio,s.fechaIngreso,s.fechaServicio,s.fechaSalida,s.precio,s.nroMotor,s.numeroPatente,e.descripcion
FROM estadoservicios AS e, servicio AS s, vehiculo AS v, cliente AS c
WHERE e.estadoServicio=s.estadoServicio AND s.nroMotor=v.nroMotor AND s.numeroPatente=v.numeroPatente AND c.cuil_cuitCliente=v.cuil_cuitCliente
ORDER BY nroServicio ASC");

                            while ($filaTabla = mysql_fetch_array($tabla3)) {
                                ?> 

                                <tr>
                                    <td><?php echo $filaTabla['nombreCliente'] ?></td>
                                    <td><?php echo $filaTabla['nombreServicio'] ?></td>
                                    <td><?php echo $filaTabla['fechaIngreso'] ?></td>
                                    <td><?php echo $filaTabla['fechaServicio'] ?></td>
                                    <td><?php echo $filaTabla['fechaSalida'] ?></td>
                                    <td><?php echo $filaTabla['precio'] ?></td>
                                    <td><?php echo $filaTabla['numeroPatente'] ?></td>
                                    <td><?php echo $filaTabla['nroMotor'] ?></td>
                                    <td><?php echo $filaTabla['descripcion'] ?></td>
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