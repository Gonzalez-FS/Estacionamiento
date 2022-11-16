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
    <title>Invitado</title>
</head>
<body>
    <center> <br>
    <h1>Info. Invitado</h1>
        <table class="tarjeta">
    <tr>
        <td>piso</td>
        <td>lugar</td>
    </tr>
    <?php
        $sql="SELECT piso,lugar FROM lugares where ID_lugar=(select id_lugar from invitados where patente_i = (select patente_i from invitados where id_invitado = (select max(id_invitado) from invitados))) ;";
        $result=mysqli_query($conexion,$sql);
       while($mostrar=mysqli_fetch_array($result)){
    ?>
    <tr>
        <td><?php echo $mostrar['piso']?></td>
        <td><?php echo $mostrar['lugar']?></td>
    </tr>
    <?php
        }
        ?>
</table>
<table class="tarjeta">
    <tr>
        <td>hora_entrada_i</td>
        <td>horas_i</td>
        <td>deuda_i</td>
    </tr>
    <?php
        $sql="SELECT hora_entrada_i,horas_i,deuda_i FROM invitados where patente_i = (select patente_i from invitados where id_invitado = (select max(id_invitado) from invitados));";
        $result=mysqli_query($conexion,$sql);
        while($mostrar=mysqli_fetch_array($result)){
    ?>
    <tr>
        <td><?php echo $mostrar['hora_entrada_i']?></td>
        <td><?php echo $mostrar['horas_i']?></td>
        <td><?php echo $mostrar['deuda_i']?></td>
    </tr>
    <?php
        }
        ?>
</table>
<br><br>
    <button class="boton">Imprimir</button><br><br>
    <button class="boton"><a href="Index.html">Salir</a></button>
    </center>
</body>
</html>