<?php
include('db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Historial</title>
</head>
<body>
    <center>
        <button class="boton"><a href="Encargado.html">Volver</a></button>
        <button class="boton"><a href="index.html">Salir</a></button>
    <h1>Visitas</h1>
<br>
<table class="tarjeta">
    <tr>
        <td>id_visita</td>
        <td>hora_entrada</td>
        <td>horas_v</td>
        <td>patente_v</td>
        <td>fecha_v</td>
        <td>ID_lugar</td>
    </tr>
    <?php
        $sql="SELECT * FROM Visitas;";
        $result=mysqli_query($conexion,$sql);

        while($mostrar=mysqli_fetch_array($result)){
    ?>
    <tr>
        <td><?php echo $mostrar['id_visita']?></td>
        <td><?php echo $mostrar['hora_entrada']?></td>
        <td><?php echo $mostrar['horas_v']?></td>
        <td><?php echo $mostrar['patente_v']?></td>
        <td><?php echo $mostrar['fecha_v']?></td>
        <td><?php echo $mostrar['ID_lugar']?></td>
    </tr>
    <?php
        }
        ?>
</table>
<br>
<h1>Pagos</h1>
<br>
<table class="tarjeta">
    <tr>
        <td>id_pago</td>
        <td>fecha</td>
        <td>patente</td>
        <td>tipo_pago</td>
        <td>monto</td>
    </tr>
    <?php
        $sql="SELECT * FROM pagos;";
        $result=mysqli_query($conexion,$sql);

        while($mostrar=mysqli_fetch_array($result)){
    ?>
    <tr>
        <td><?php echo $mostrar['id_pago']?></td>
        <td><?php echo $mostrar['fecha']?></td>
        <td><?php echo $mostrar['patente']?></td>
        <td><?php echo $mostrar['tipo_pago']?></td>
        <td><?php echo $mostrar['monto']?></td>
    </tr>
    <?php
        }
        ?>
</table>
<br>
</center>