<?php

$username_A=$_POST['username_A'];
$password_A=$_POST['password_A'];

session_start();
$_SESSION['username_A']=$username_A;
$_SESSION['password_A']=$password_A;

include('db.php');

$consulta="SELECT * FROM ADMINS WHERE username_A = '$username_A' and password_A = '$password_A' ";
$resultado = mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if ($filas) {
    ?>
<script>
window.open("http://localhost/EstacionamientoGonzalez/Admin.html","_self");
</script>
    <?php
} else {
    include("IngresoAdmin.html");
  ?>
  <center>
  <h1>Error al ingresar</h1>
</center>
      <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);

  ?>