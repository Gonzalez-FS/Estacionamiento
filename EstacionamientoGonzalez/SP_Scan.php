<?php

$patente_i=$_POST['patente_i'];

session_start();
$_SESSION['patente_i']=$patente_i;

include('db.php');

$consulta2="if((select estado from usuarios where patente_u = '$patente_i') = 'Activo' then 
insert into visitas (patente_v,hora_entrada,fecha_v,id_lugar) values ('$patente_i',(select current_time()),(select current_date()), (select id_lugar from usuarios where patente_u = '$patente_i'));
else
signal SQLSTATE '02000' SET MESSAGE_TEXT = 'NO ENCONTRADO';
end if;";

$consulta4="update lugares set estado_l = 'ocupado' where lugar = (select lugar from lugares where id_lugar = (select id_lugar from usuarios where patente_u = '$patente_i'));";
$consulta5= "update informes set cantidad_total = cantidad_total + 1 where tipo = 'vehiculos diarios' or tipo= 'vehiculos mensuales';";

if ($conexion->query($consulta2) === TRUE && $conexion->query($consulta4) === TRUE && $conexion->query($consulta5) === TRUE) {
    include("Scan.html");
  ?>
  <center>
  <h1>Encontrado</h1>
</center>
      <?php
} else {
    include("Scan.html");
  ?>
  <center>
  <h1>No se pudo ingresar</h1>
</center>
      <?php
}
  $conexion->close();
  ?>