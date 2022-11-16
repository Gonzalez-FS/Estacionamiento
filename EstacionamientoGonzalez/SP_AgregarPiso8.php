<?php

session_start();

include('db.php');

$consulta="if ((select count(piso) from lugares where piso = '8') = 0) then 
insert into lugares (piso,lugar,patente_l,estado_l) values ('8','IAA','-','LIBRE');
insert into lugares (piso,lugar,patente_l,estado_l) values ('8','IAB','-','LIBRE');
insert into lugares (piso,lugar,patente_l,estado_l) values ('8','IAC','-','LIBRE');
insert into lugares (piso,lugar,patente_l,estado_l) values ('8','IAD','-','LIBRE');
insert into lugares (piso,lugar,patente_l,estado_l) values ('8','IBA','-','LIBRE');
insert into lugares (piso,lugar,patente_l,estado_l) values ('8','IBB','-','LIBRE');
insert into lugares (piso,lugar,patente_l,estado_l) values ('8','IBC','-','LIBRE');
insert into lugares (piso,lugar,patente_l,estado_l) values ('8','IBD','-','LIBRE');
else
signal SQLSTATE '02000' SET MESSAGE_TEXT = 'NO SE PUDO INGRESAR';
end if;";

if ($conexion->query($consulta) === TRUE) {
    include("Pisos.php");
  ?>
  <center>
  <h1>Piso ingresado</h1>
</center>
      <?php
} else {
    include("Pisos.php");
  ?>
  <center>
  <h1>No se pudo ingresar</h1>
</center>
      <?php
}
  $conexion->close();
  ?>