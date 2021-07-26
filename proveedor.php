<!DOCTYPE html>
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
                <button class="btn btn-success btn-md" data-toggle="modal" data-target="#miventana" role="button">Agregar Proveedor</button>  

                <div class="modal fade" id="miventana" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">Agregar Proveedor</h4>
                            </div>
                            <div class="modal-body">
                                <form class="form-horizontal" method="post" action="agreProveedor.php">
                                    <div class="form-group">
                                        <label for="cuilP" class="col-lg-2 control-label">cuil/cuit Proveedor:</id></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="cuilP" placeholder="Ingrese cuil/cuit del Proveedor" required autofocus  style="width:300px;"></input> <br>
                                        </div>

                                        <label for="nombreP" class="col-lg-2 control-label">Nombre del Proveedor: </id></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="nombreP" placeholder="Ingrese nombre del Proveedor" required autofocus  style="width:300px;"></input> <br>
                                        </div>                

                                        <label for="direP" class="col-lg-2 control-label">Dirección del Proveedor:</id></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="direP" placeholder="Ingrese dirección" required autofocus  style="width:300px;"></input><br>
                                        </div>  

                                        <label for="telefonoP" class="col-lg-2 control-label">Teléfono: </id></label> 
                                        <div class="col-lg-10">  
                                            <input type="text" class="form-control" name="telefonoP" placeholder="Ingrese telefono" required autofocus  style="width:300px;"></input> <br>
                                        </div>





                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                        <button type="submit" class="btn btn-primary" >Guardar Cambios</button>
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
                                <th>Nombre del Proveedor</th>
                                <th>cuil o cuit</th>
                                <th>Dirección</th>
                                <th>Telefono</th>
                            </tr>
                        </thead>
                        <tbody ><?php
                            include "lib/adaptador.php";
                            $link = Conectarse();

                            $tabla = mysql_query("SELECT * FROM proveedor");
                            while ($filaTabla = mysql_fetch_array($tabla)) {
                                ?> 

                                <tr>
                                    <td><?php echo $filaTabla['nombreProveedor'] ?></td>
                                    <td><?php echo $filaTabla['cuil_cuitProveedor'] ?></td>
                                    <td><?php echo $filaTabla['direccionProveedor'] ?></td>
                                    <td><?php echo $filaTabla['telefonoProveedor'] ?></td>
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