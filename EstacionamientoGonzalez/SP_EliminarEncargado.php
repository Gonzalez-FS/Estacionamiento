<?php

$username_Edlt=$_POST['username_Edlt'];

session_start();
$_SESSION['username_Edlt']=$username_Edlt;

include('db.php');

$consulta="Delete from encargados where username_e = '$username_Edlt'";

if ($conexion->query($consulta) === TRUE) {
    include("AdminEncargados.php");
  ?>
  <center>
  <h1>Encargado eliminado</h1>
</center>
      <?php
} else {
    include("AdminEncargados.php");
  ?>
  <center>
  <h1>No se pudo eliminar</h1>
</center>
      <?php
}
  $conexion->close();
  ?>