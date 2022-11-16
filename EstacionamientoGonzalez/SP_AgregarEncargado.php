<?php

$username_E=$_POST['username_E'];
$password_E=$_POST['password_E'];

session_start();
$_SESSION['username_e']=$username_E;
$_SESSION['password_e']=$password_E;

include('db.php');

$consulta="if ((select count(username_e) from encargados where username_e = '$username_E') = 0) then 
insert into encargados (username_e,password_e) values ('$username_E','$password_E');
else
signal SQLSTATE '02000' SET MESSAGE_TEXT = 'NO SE PUDO INGRESAR';
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