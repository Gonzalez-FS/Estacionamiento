<?php

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$patente_u=$_POST['patente_u'];
$marca=$_POST['marca'];
$modelo=$_POST['modelo'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$lugar=$_POST['lugar'];

session_start();
$_SESSION['nombre']=$nombre;
$_SESSION['apellido']=$apellido;
$_SESSION['patente_u']=$patente_u;
$_SESSION['marca']=$marca;
$_SESSION['modelo']=$modelo;
$_SESSION['telefono']=$telefono;
$_SESSION['direccion']=$direccion;
$_SESSION['lugar']=$lugar;

include('db.php');

$consulta="if ((select count(patente_u) from usuarios where patente_u = '$patente_u') = 0) then 
insert into usuarios (nombre,apellido,patente_u,marca,modelo,telefono,direccion,id_lugar,estado) values ('$nombre','$apellido','$patente_u','$marca','$modelo','$telefono','$direccion',(select id_lugar from lugares where lugar = '$lugar'),'Activo');
else
update usuarios set estado = 'Activo' where patente_u = '$patente_u';
end if;";
$consulta2="update lugares set patente_l = '$patente_u' where lugar = '$lugar';";
$consulta3="update lugares set estado_l = 'Reservado' where lugar = '$lugar';";
$consulta4="insert into pagos (fecha,monto,patente,tipo_pago) values ((select current_date()),12000,'$patente_u','Usuario');"; 
$consulta5="update informes set cantidad_total = cantidad_total + 12000 where tipo ='ganancia diaria' or tipo = 'ganancia mensual';";

if ($conexion->query($consulta) === TRUE && $conexion->query($consulta2) === TRUE && $conexion->query($consulta3) === TRUE && $conexion->query($consulta4) === TRUE && $conexion->query($consulta5) === TRUE ) {
    include("Encargado.html");
  ?>
  <center>
  <h1>Pago realizado</h1>
</center>
      <?php
} else {
    include("Encargado.html");
  ?>
  <center>
  <h1>No se pudo pagar</h1>
</center>
      <?php
}
  $conexion->close();
  ?>