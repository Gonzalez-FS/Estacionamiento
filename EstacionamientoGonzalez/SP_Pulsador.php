<?php

$patente_i=$_POST['patente_i'];
$horas_i=$_POST['horas_i'];
$lugar=$_POST['lugar'];

session_start();
$_SESSION['patente_i']=$patente_i;
$_SESSION['horas_i']=$horas_i;
$_SESSION['lugar']=$lugar;

include('db.php');

$consulta="if((select patente_l from lugares where lugar = '$lugar') = '-') then
insert into invitados (patente_i,hora_entrada_i,horas_i,deuda_i,id_lugar) values ('$patente_i',(select current_time()),$horas_i,($horas_i*120),(select id_lugar from lugares where lugar = '$lugar'));
else
signal SQLSTATE '02000' SET MESSAGE_TEXT = 'LUGAR OCUPADO';
end if;";
$consulta2="insert into visitas (patente_v,hora_entrada,horas_v,fecha_v,id_lugar) values ('$patente_i',(select current_time()),$horas_i,(select current_date()), (select id_lugar from lugares where lugar = '$lugar'));";
$consulta3="update lugares set patente_l = '$patente_i' where lugar = '$lugar';";
$consulta4="update lugares set estado_l = 'OCUPADO' where lugar = '$lugar';";
$consulta5= "update informes set cantidad_total = cantidad_total + 1 where tipo = 'vehiculos diarios' or tipo= 'vehiculos mensuales';";

if ($conexion->query($consulta) === TRUE && $conexion->query($consulta2) === TRUE && $conexion->query($consulta3) === TRUE && $conexion->query($consulta4) === TRUE && $conexion->query($consulta5) === TRUE) {
    ?>
<script>
window.open("http://localhost/EstacionamientoGonzalez/Invitado.php","_self");
</script>
    <?php
} else {
    include("pulsador.php");
  ?>
  <center>
  <h1>No se pudo ingresar</h1>
</center>
      <?php
}
  $conexion->close();
  ?>