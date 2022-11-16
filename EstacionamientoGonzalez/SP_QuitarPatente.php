<?php

$patente_l=$_POST['patente_l'];

session_start();
$_SESSION['patente_l']=$patente_l;

include('db.php');

$consulta="update lugares set estado_l = 'LIBRE' where patente_l = '$patente_l';";
$consulta2="update lugares set patente_l = '-' where patente_l = '$patente_l';";

if ($conexion->query($consulta) === TRUE && $conexion->query($consulta2) === TRUE) {
    include("Encargado.html");
  ?>
  <center>
  <h1>Patente eliminada</h1>
</center>
      <?php
} else {
    include("Encargado.html");
  ?>
  <center>
  <h1>No se pudo eliminar</h1>
</center>
      <?php
}
  $conexion->close();
  ?>