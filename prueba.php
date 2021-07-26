<html>
    <head>
        <title>Prueba</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href = "css/bootstrap.min.css" rel="stylesheet">        
        <link href="css/styles.css" rel="stylesheet"

    </head>
    <body>
        <div id="myCarousel" class="carousel slide">
            
            <ol class="carousel-indicators">
                <li data-target = "#myCarousel" data-slide-to ="0" class="active"></li>
                <li data-target = "#myCarousel" data-slide-to ="1"></li>
                <li data-target = "#myCarousel" data-slide-to ="2"></li>
            </ol>
            <div class="carousel-inner">

                <div class="item active">
                    <img src="imagenes/auto.png" alt="Auto" class="img-responsive">
                    <div class="carousel-caption"> 
                        <h3>Auto</h3>
                    </div>
                </div>
                <div class="item">
                    <img src="imagenes/lupa.png" alt="lupa" class="img-responsive">
                    <div class="carousel-caption">

                        <h3>Lupa</h3>
                    </div>
                </div>
                <div class="item">
                    <img src="imagenes/retroCar.jpg" alt="retroCar" class="img-responsive">
                    <h3>RetroCar</h3>
                    <div class="carousel-caption">

                    </div>
                </div>
            </div>               
            <a class="carousel-control left" href="#myCarousel" data-slide="prev">

                <span class="icon-prev"></span>       
            </a>
            <a class="carousel-control right" href="#myCarousel" data-slide="next">

                <span class="icon-next"></span>       
            </a>

        </div>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
    </body> 
</html>