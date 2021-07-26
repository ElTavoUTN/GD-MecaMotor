<!DOCTYPE html>
<html lang="es">
    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="shorcut" type="image/x-ico" href="/imagenes/auto.ico" />
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
                            <!--   <li class="dropdown">
                             <li class="dropdown">
                                   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                             <ul class="dropdown-menu" role="menu">
                               <li><a href="#">Action</a></li>
                               <li><a href="#">Another action</a></li>
                               <li><a href="#">Something else here</a></li>
                               <li class="divider"></li>
                               <li><a href="#">Separated link</a></li>
                               <li class="divider"></li>
                               <li><a href="#">One more separated link</a></li>
                             </ul>
                           </li>
                            <!-- ejemplo de dropdown -->  

                            <!--        <div class="btn-group ">
                              <a href="#" class="btn btn-default">Default</a>
                              <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                  <li><a href="About.php">Action</a></li>
                                <li><a href="system.php">Another action</a></li>
                                <li><a href="prueba.php">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="index.html">Separated link</a></li>
                              </ul>
                            </div>
                            <div class="btn-group">
                              <a href="#" class="btn btn-success">Success</a>
                              <a href="#" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                              </ul>
                            </div>
                                  
                            <div class="btn-group">
                                <a href="#" class="btn btn-info">Info</a>
                              <a href="#" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                              </ul>
                            </div>
                            
                            
                            <div class="btn-group">
                              <a href="#" class="btn btn-warning">Warning</a>
                              <a href="#" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                              </ul>
                            </div>-->


                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </section>

        <div class="jumbotron">
            <div class="container">
                <h1>MecaMotor</h1>

            </div>

        </div>


        <form class="form-horizontal" method="post" action="haceConsuSql.php">
            <fieldset>
                <legend>Realizar consultas a la base de datos</legend>

                <div class="form-group">
                    <label for="consu" class="col-lg-2 control-label">Consulta en SQL:</id></label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="consu" placeholder="Ingrese consulta en SQL" required autofocus  style="width:300px;"></input> <br>
                    </div>


                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">

                            <button type="submit" class="btn btn-primary">Hacer Consulta</button>

                            <button type="reset" class="btn btn-default">Cancelar</button>
                            <button class="btn btn-info btn-md" data-toggle="modal" data-target="#miventana" role="button">Posibles Consultas</button>  
                            <div class="modal fade" id="miventana" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">Posibles Consultas</h4>
                                        </div>
                                        <div class="modal-body"> 
                                            <p><b>1- Obtener todos los datos de los vehículos del taller Mecánico.</b></p>
                                            <code> SELECT *
                                                FROM vehiculo<br><br></code>
                                            <p><b>2- Obtener los nombres de los Mecánicos que trabajan en el servicio de “Alineación”</b></p>
                                            <code>SELECT m.nombreMecanico, s.nombreServicio
                                                FROM servicio AS s, mecanico AS m, asignado AS asig
                                                WHERE nombreServicio= 'Alineacion' AND s.nroServicio=asig.nroServicio AND
                                                m.legajoMecanico= asig.legajoMecanico;<br><br></code>
                                            <p><b>3- Obtener la cantidad de herramientas de llave llave curva disponibles</b></p>
                                            <code>SELECT nombreHerramienta, COUNT(cantHerramienta)
                                                FROM herramienta
                                                WHERE nombreHerramienta= 'Tubo largo'
                                                GROUP BY cantHerramienta<br><br></code>
                                            <p><b>4- Obtener los nombres y teléfono de los Proveedores de Correas y Pistones</b></p>
                                            <code>SELECT nombreProveedor, telefonoProveedor, direccionProveedor, nombreRepuesto
                                                FROM proveedor AS p, repuesto AS r , provee AS pro
                                                WHERE r.nombreRepuesto='Correas y pistones' AND p.cuil_cuitProveedor=
                                                pro.cuil_cuitProveedor AND r.codigoRepuesto= pro.codigoRepuesto;<br><br></code>
                                            <p><b>5- Deseamos obtener los vehículos que hayan ingresado a servicio la fecha '2015-05-31</b></p>
                                            <code>SELECT s.fechaIngreso, v.numeroPatente, v.modeloVehiculo, s.nombreServicio, s.nroServicio,
                                                s.estadoServicio
                                                FROM vehiculo AS v , servicio AS s
                                                WHERE s.fechaIngreso='2015-05-31' AND v.numeroPatente=s.numeroPatente AND
                                                v.nroMotor=s.nroMotor<br><br></code>
                                            <p><b>6- Buscar el estado del servicio solicitado para el vehículo con número de patente “AAO881”</b></p>
                                            <code>SELECT s.estadoServicio, s.nombreServicio, s.nroServicio, v.numeroPatente
                                                FROM servicio AS s, vehiculo AS v
                                                WHERE v.numeroPatente='AAO881' AND v.numeroPatente=s.numeroPatente AND
                                                v.nroMotor=s.nroMotor<br><br></code>
                                            <p><b>7- Obtener los servicios más comunes que se hayan hecho a la marca de vehículo “Ford”,
                                                    mostrar todos los tipos de servicios realizados a los vehículos de esa marca.</b></p>
                                            <code>SELECT nombreServicio, nroServicio, nombreMarca
                                                FROM servicio AS s, vehiculo AS v
                                                WHERE nombreMarca='Ford' AND v.numeroPatente=s.numeroPatente AND
                                                v.nroMotor=s.nroMotor;<br><br></code>
                                            <p><b>8- Buscar aquellos clientes que hayan requerido para su vehículo o vehículos el servicio de
                                                    “inyección electronica”</b></p>
                                            <code>SELECT c.`nombreCliente`, c.`telefonoCliente`, s.`nombreServicio`,s.`nroServicio`,
                                                v.`numeroPatente`,v.`cuil_cuitCliente`
                                                FROM vehiculo AS v, servicio AS s, cliente AS c
                                                WHERE nombreServicio ='inyección electronica'AND v.numeroPatente=s.numeroPatente AND
                                                v.nroMotor=s.nroMotor;<br><br></code>
                                            <p><b>9- Consultar la cantidad de repuestos con código 1 existentes, mostrar la marca y la cantidad.</b></p>
                                            <code>SELECT nombreRepuesto, codigoRepuesto, COUNT(cantidadRepuesto), descripcion
                                                FROM repuesto
                                                WHERE codigoRepuesto=1
                                                GROUP BY cantidadRepuesto<br><br></code>
                                            <p><b>10- Mostrar todos los servicios que puede ejecutar un mecánico con legajo número 23456</b></p>
                                            <code>SELECT m.nombreMecanico, m.legajoMecanico,s.nombreServicio, s.nroServicio,s.fechaServicio
                                                FROM mecanico AS m, servicio AS s, asignado AS a
                                                WHERE s.nroServicio= a.nroServicio AND m.legajoMecanico=23456;<br><br></code>
                                            <p><b>11- Buscar todos los repuestos con su código y marca correspondiente que nos proveen el
                                                    proveedor Repuestos</b></p>
                                            <code>SELECT r.nombreRepuesto, r.codigoRepuesto, r.marcaRepuesto, p.nombreProveedor,
                                                p.telefonoProveedor,p.direccionProveedor
                                                FROM repuesto AS r, proveedor AS p, provee AS pro
                                                WHERE p.nombreProveedor='Repuestos'AND r.codigoRepuesto= pro.codigoRepuesto AND
                                                p.cuil_cuitProveedor=pro.cuil_cuitProveedor<br><br></code>
                                            <p><b>12- Obtener todos los servicios cuyos precios estén en un rango de 1000 a 2500 pesos</b></p>
                                            <code>SELECT precio, nroServicio, nombreServicio
                                                FROM servicio
                                                WHERE precio BETWEEN 1000 AND 2500<br><br></code>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>

                                            </div>
                                        </div>


                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
            </fieldset>
        </form>
        <hr>

        <footer>
            <p>MecaMotor</p>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery.js"></script>	  
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>	
    <script src="js/bootstrap.min.js"></script>    
    

</body>
</html>