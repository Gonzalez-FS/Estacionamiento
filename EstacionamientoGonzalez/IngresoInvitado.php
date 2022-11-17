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
    <title>ingreso invitado</title>
</head>
<body>
    <center>
        <div class="tarjeta">
    <h1>Ingreso invitado</h1>
    <form action="SP_Pulsador.php" method ="post">
    <head>Patente: <input type="text" id="patente_i" name="patente_i" autocomplete='off'/></head>
    <br>
    <head>Horas a usar: <input type="text" id="horas_i" name="horas_i" autocomplete='off'/></head>
    <br>
    <head>Lugar: <input type="text" id="lugar" name="lugar" autocomplete='off'/></head>
    <br>
    <header> </header>
    <input type="Submit" class="boton"></input>
    </form>
</div><br>
<button class="boton"><a href="Index.html">Salir</a></button>
<br> <h2>Lugares disponibles</h2>
<table class="tarjeta">
    <tr>
        <td>piso</td>
        <td>lugar</td>
        <td>estado_l</td>
    </tr>
    <?php
        $sql="SELECT piso,lugar,estado_l FROM lugares where estado_l = 'libre';";
        $result=mysqli_query($conexion,$sql);

        while($mostrar=mysqli_fetch_array($result)){
    ?>
    <tr>
        <td><?php echo $mostrar['piso']?></td>
        <td><?php echo $mostrar['lugar']?></td>
        <td><?php echo $mostrar['estado_l']?></td>
    </tr>
    <?php
        }
        ?>
</table>
<h2>Se paga hora completa</h2>
    </center>
</body>
</html>