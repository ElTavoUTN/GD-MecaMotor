<?php
function conectarse(){

    $conexion = @mysql_connect("localhost", "root", "root")
        or die("Fallo en el establecimiento de la conexión");
@mysql_select_db("mecamotor");

$alias = $_POST['alias'];
$pass = $_POST['password'];

$resultado = mysql_query("SELECT * FROM `usuarios` WHERE `usu_alias`='$alias'");
if ($fila = @mysql_fetch_array($resultado)) {
    if ($fila['pass'] == $pass) {
        echo $fila['usu_perfil'];
        if ($fila['usu_perfil'] == "marinero") {
            $tabla = mysql_query("SELECT * FROM `usuarios`");
?><table border="2"><?php
            while ($filaTabla = mysql_fetch_array($tabla)) {
?><tr><td><?php echo $filaTabla['usu_alias'] ?></td><td><?php echo $filaTabla['usu_c_acceso'] ?></td><td><?php echo $filaTabla['usu_perfil'] ?></td>
<td><?php echo $filaTabla['Fecha_Nacimiento'] ?></td></tr>
          
    <?php } ?>
        </table><?php
        } else {
            header("location:index.php?q=2");
        }
    } else {
        header("location:index.php?q=1");
    }
} else {
    header("location:index.php?q=0");
 }

}
    ?>

     <option>Alineación</option>
          <option>Reparación de frenos</option>
          <option>Cambios de correa y afinación</option>
          <option>Cambio de batería</option>
          <option>Reparación de caja de cambios</option>
          <option>Sustitución de radiadores de refrigeración</option>
          <option>Reparación de radiadores de refrigeración</option>
          <option>Sustición de parabrisas</option>
          <option>Reparación de parabrisas y lunetas</option>
          <option>Instalación de parabrisas y lunetas</option>
          <option>Cambio de embrague</option>
          <option>Reparación de embrague</option>
          <option>Reparación de bomba inyectora</option>
          <option>Cambio de bomba inyectora</option>
          <option>Diagnosis de motor</option>
          <option>Inyección electronica</option>
          <option>Limpieza de inyectores</option>
          <option>Chapa y pintura</option>
          <option>Pulido de carrocería</option>
          <option>Limpieza de interiores</option>
          <option>Tapicería</option>
          <option>Reparaciones ITV</option>
          <option>Colocación de amortiguadores</option>
          <option>Reparación de amortiguadores</option>
          <option>Reparación de motor</option>
          <option>Reparación de tapas de cilindro</option>
          <option>Descabornización de tapas de cilindro</option>
          <option>Reparación de carburadores</option>
          <option>Colocación de carburadores</option>