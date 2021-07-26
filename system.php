<!DOCTYPE html>
<html lang="es">
   
    <head>
        <!-- Latest compiled and minified CSS -->
       
    
        
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-theme.css">
        <link rel="stylesheet" href="css/bootstrap.min.css" >
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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

                            <!--      <div class="btn-group ">
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
                <p>En el proyecto presente se ha diseñado e implementado un base de datos (BD) para gestión de stock y tiempos de producción de un taller Mecánico.</p>
                <div class="col-md-12">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target = "#myCarousel" data-slide-to ="0" class="active"></li>
                <li data-target = "#myCarousel" data-slide-to ="1"></li>
                <li data-target = "#myCarousel" data-slide-to ="2"></li>
                <li data-target = "#myCarousel" data-slide-to ="3"></li>
                <li data-target = "#myCarousel" data-slide-to ="4"></li>
            </ol>
            <div class="carousel-inner" >

                <div class="item active">
                    <img src="imagenes/rsz_vintage_car.jpg" class="img-responsive" alt="Auto" >
                    <div class="carousel-caption"> 
                        <h3></h3>
                    </div>
                </div>
                <div class="item">
                    <img src="imagenes/rsz_06.jpg" class="img-responsive" alt="lupa" >
                    <div class="carousel-caption">

                        <h3></h3>
                    </div>
                </div>
                <div class="item">
                    <img src="imagenes/rsz_10_garage.jpg" class="img-responsive" alt="retroCar" />
                    
                    <div class="carousel-caption">
                    <h3></h3>
                    </div>
                </div>
                <div class="item">
                    <img src="imagenes/rsz_104.jpg" class="img-responsive" alt="otra1" />
                    
                    <div class="carousel-caption">
                    <h3></h3>
                    </div>
                </div>
                <div class="item">
                    <img src="imagenes/rsz_13089-np1vw8.jpg" class="img-responsive" alt="otra2" />
                    
                    <div class="carousel-caption">
                    <h3></h3>
                    </div>
                </div>
            </div>               
        <!--    <a class="carousel-control left" href="#myCarousel" data-slide="prev">

                <span class="icon-prev"></span>       
            </a>
            <a class="carousel-control right" href="#myCarousel" data-slide="next">

                <span class="icon-next"></span>       
            </a> -->
     <!-- Controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

        </div> <br><br>
                    </div>
                <br><br>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Saber mas >>></a></p>
            </div>
        </div>

        <div class="container">
            <!-- Example row of columns -->
            <div class="row">
                <div class="col-md-4">
                    <h2>Beneficios:</h2>
                    <ul>
                        <li>Control automático del stock.</li>
                        <li>Notificación por falta de herramientas.</li>
                        <li>Consulta del stock de herramientas en tiempo real.</li>
                        <li>Estimación instantánea del tiempo de entrega de las reparaciones.</li>

                    </ul>
                    <p><a class="btn btn-default" href="#" role="button">Saber mas >>></a></p>
                </div>

                <div class="col-md-4">
                    <h2>Deficiencias del sistema anterior:</h2>
                    <ul>
                        <li>Control manual del stock de herramientas.</li>
                        <li>Pérdida de clientes por faltantes no previstos de stock.</li>
                        <li>El stock existente se conoce al finalizar la jornada laboral.</li>
                        <li>Los servicio de reparación se cargan manualmente.</li>
                        <li>Los pedidos de reposición de herramienta se arman manualmente.</li>
                        <li>Estimación de tiempos de entrega no satisfactoria para el cliente.</li>

                    </ul>
                    <p><a class="btn btn-default" href="#" role="button">Saber mas >>></a></p>
                </div>

                <div class="col-md-4">
                    <h2>Características del SGBD:</h2>
                    <ul>
                        <li>El volumen de datos no es grande y este entorno satisface lo requerido.</li>
                        <li>El número de usuarios simultáneos que tendrá la base de datos es pequeño.</li>
                        <li>Al ser gratuito no implicará costos adicionales para el cliente.</li>

                    </ul>
                    <p><a class="btn btn-default" href="#" role="button">Saber mas >>></a></p>
                </div>
            </div>

            <hr>

            <footer>
                <p>MecaMotor</p>
            </footer>
        </div>
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>	
        <script src="js/bootstrap.js"></script>
    </body>
</html>