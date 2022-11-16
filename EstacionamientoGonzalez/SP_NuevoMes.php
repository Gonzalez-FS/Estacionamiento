<?php

session_start();

include('db.php');

$consulta="update informes set cantidad_total = 0;";

$consulta2="update usuarios set estado = 'Moroso' where estado = 'Activo';";

$consulta3="update lugares set estado_l = 'Libre' where estado_l = 'Reservado';";

if ($conexion->query($consulta) === TRUE && $conexion->query($consulta2) === TRUE && $conexion->query($consulta3) === TRUE) {
    include("Informes.php");
  ?>
  <center>
  <h1>Actualizado</h1>
</center>
      <?php
} else {
    include("Informes.php");
  ?>
  <center>
  <h1>No se pudo actualizar</h1>
</center>
      <?php
}
  $conexion->close();
  ?>