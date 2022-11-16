<?php

session_start();

include('db.php');

$consulta="update informes set cantidad_total = 0 where tipo = 'vehiculos diarios' or tipo = 'ganancia diaria';";

if ($conexion->query($consulta) === TRUE) {
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