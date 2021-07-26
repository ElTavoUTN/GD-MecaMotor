<!DOCTYPE html>
<html lang="es">
    <head>
        <!-- Latest compiled and minified CSS -->
        
      <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-theme.css">
        <link rel="stylesheet" href="css/bootstrap.min.css" >
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale-1">
        <style>
            body{
                font-family: "Verdana", Times, serif;
                background:url('imagenes/blauer-hintergrund-166115.jpg') repeat 0 0;
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
            <div class="container">
                <h1>MecaMotor</h1>
                <p>Equipo en la elaboración del proyecto.</p>
                <br>
                <ul>
                    <li><h3><i>Barahona, Katherina</i></h3></li>
                    <li><h3><i>Lemos, Gustavo</i></h3></li>
                    <li><h3><i>Maidana, Noralí</i></h3></li>
                </ul>
            </div>
        </div>
         <div class="container">
            <!-- Example row of columns -->
            <div class="row">
                <div class="col-md-4">
                 
                </div>
<div class="col-md-4">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target = "#myCarousel" data-slide-to ="0" class="active"></li>
                <li data-target = "#myCarousel" data-slide-to ="1"></li>
                
               
            </ol>
            <div class="carousel-inner" role="listbox">

                <div class="item active">
                    <img src="imagenes/muchas-gracias-de-ositos.gif" class="img-responsive" alt="Auto" >
                    <div class="carousel-caption"> 
                        <h3></h3>
                    </div>
                </div>
                <div class="item">
                    <img src="imagenes/tumblr_mqotj6a7Ok1sd1ws4o1_500.gif" class="img-responsive" alt="lupa" >
                    <div class="carousel-caption">

                        <h3></h3>
                    </div>
                </div>
                
            </div>               
        
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
                
            </div>
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