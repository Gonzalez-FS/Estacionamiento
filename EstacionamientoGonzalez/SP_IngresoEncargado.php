<?php

$username_e=$_POST['username_e'];
$password_e=$_POST['password_e'];

session_start();
$_SESSION['username_e']=$username_e;
$_SESSION['password_e']=$password_e;

include('db.php');

$consulta="SELECT * FROM ENCARGADOS WHERE username_e = '$username_e' and password_e = '$password_e' ";
$resultado = mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if ($filas) {
    ?>
<script>
window.open("http://localhost/EstacionamientoGonzalez/Encargado.html","_self");
</script>
    <?php
} else {
    include("IngresoEncargado.html");
  ?>
  <center>
  <h1>Error al ingresar</h1>
</center>
      <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);

  ?>