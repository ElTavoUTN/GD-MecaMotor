<html>
    <head>
        <link type="image/x-icon" href="imagenes/Car_with_Wrench_red_16.ico" rel="icon" />
        <style>
            h2,p,a p{
                text-align:center;
            }
            #center{
                margin-left:48%;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-theme.css">
        <meta charset="UTF-8">
        <title>Usuario y/o Clave incorrecta</title>
    </head>
    <body>
        <?php
        include "lib/adaptador.php";
        $link = Conectarse();

        $usuario = $_REQUEST['usuario'];
        $clave = $_REQUEST['clave'];

        //echo $usuario;
        echo "<br>";
        //echo $clave;


        $resultado = mysql_query("SELECT * FROM `usuarios` WHERE `usuario`='$usuario'");

        if ($fila = @mysql_fetch_array($resultado)) {
            if ($fila['usuario'] == $usuario) {


                if ($fila['pass'] == $clave) {
                    echo "<br>exito!<br>";
                    header("Location: system.php");
                    exit;
                } else {
                    echo "<h2>Clave incorrecta</h2>";
                    echo "<a id=\"center\" href=\"index.HTML\" <p>Volver</p</a>";
                }
            } else {
                echo "<h2>Usuario Incorrecto</h2>";
                echo "<a id=\"center\" href=\"index.HTML\" <p>Volver</p</a>";
            }
        }
        ?>
    </body>
</html>