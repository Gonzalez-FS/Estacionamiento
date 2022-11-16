<?php

session_start();

include('db.php');

$consulta="if ((select count(piso) from lugares where piso = '9') = 0) then 
insert into lugares (piso,lugar,patente_l,estado_l) values ('9','JAA','-','LIBRE');
insert into lugares (piso,lugar,patente_l,estado_l) values ('9','JAB','-','LIBRE');
insert into lugares (piso,lugar,patente_l,estado_l) values ('9','JAC','-','LIBRE');
insert into lugares (piso,lugar,patente_l,estado_l) values ('9','JAD','-','LIBRE');
insert into lugares (piso,lugar,patente_l,estado_l) values ('9','JBA','-','LIBRE');
insert into lugares (piso,lugar,patente_l,estado_l) values ('9','JBB','-','LIBRE');
insert into lugares (piso,lugar,patente_l,estado_l) values ('9','JBC','-','LIBRE');
insert into lugares (piso,lugar,patente_l,estado_l) values ('9','JBD','-','LIBRE');
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