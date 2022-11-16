<?php

session_start();

include('db.php');

$consulta="if ((select count(piso) from lugares where piso = '10') = 0) then 
insert into lugares (piso,lugar,patente_l,estado_l) values ('10','KAA','-','LIBRE');
insert into lugares (piso,lugar,patente_l,estado_l) values ('10','KAB','-','LIBRE');
insert into lugares (piso,lugar,patente_l,estado_l) values ('10','KAC','-','LIBRE');
insert into lugares (piso,lugar,patente_l,estado_l) values ('10','KAD','-','LIBRE');
insert into lugares (piso,lugar,patente_l,estado_l) values ('10','KBA','-','LIBRE');
insert into lugares (piso,lugar,patente_l,estado_l) values ('10','KBB','-','LIBRE');
insert into lugares (piso,lugar,patente_l,estado_l) values ('10','KBC','-','LIBRE');
insert into lugares (piso,lugar,patente_l,estado_l) values ('10','KBD','-','LIBRE');
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