<?php

$username_E=$_POST['username_E'];
$password_E=$_POST['password_E'];
$turno_E=$_POST['turno_E'];

session_start();
$_SESSION['username_e']=$username_E;
$_SESSION['password_e']=$password_E;
$_SESSION['turno_E']=$turno_E;

include('db.php');

$consulta="if ((select count(username_e) from encargados where username_e = '$username_E') = 0 and (select count(username_e) from encargados where turno_e = '$turno_E') < 3) then 
insert into encargados (username_e,password_e,turno_e) values ('$username_E','$password_E','$turno_E');
end if;";

if ($conexion->query($consulta) === TRUE) {
    include("AdminEncargados.php");
  ?>
  <center>
  <h1>Encargado Ingresado</h1>
</center>
      <?php
} else {
    include("AdminEncargados.php");
  ?>
  <center>
  <h1>No se pudo ingresar</h1>
</center>
      <?php
}
  $conexion->close();
  ?>