<?php

$patente_i=$_POST['patente_i'];

session_start();
$_SESSION['patente_i']=$patente_i;

include('db.php');

$consulta="update informes set cantidad_total = cantidad_total + (select deuda_i from invitados where patente_i = '$patente_i') where tipo ='ganancia diaria' or tipo = 'ganancia mensual';";
$consulta1="update lugares set estado_l = 'LIBRE' where patente_l = '$patente_i';";
$consulta2="update lugares set patente_l = '-' where patente_l = '$patente_i';";
$consulta3= "insert into pagos (fecha,monto,patente,tipo_pago) values ((select current_date()),(select deuda_i from invitados where patente_i = '$patente_i'),'$patente_i','invitado');"; 
$consulta4= "update invitados set deuda_i = 0 where patente_i = '$patente_i';";

if ($conexion->query($consulta) === TRUE && $conexion->query($consulta1) === TRUE && $conexion->query($consulta2) === TRUE && $conexion->query($consulta3) === TRUE && $conexion->query($consulta4) === TRUE) {
    include("PagoInvitado.php");
  ?>
  <center>
  <h1>Cobrado</h1>
</center>
      <?php
} else {
    include("PagoInvitado.php");
  ?>
  <center>
  <h1>No se pudo cobrar</h1>
</center>
      <?php
}
  $conexion->close();
  ?>
