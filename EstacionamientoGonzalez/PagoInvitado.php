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
    <title>Pago invitado</title>
</head>
<body>
    <center>
        <div class="tarjeta">
        <h1>Cobrar</h1>
    <form action="SP_CobrarInvitado.php" method ="post">
    <head>Patente: <input type='text' id='patente_i' name='patente_i' autoComplete='off'/></head>
    <br><br>
    <header> </header><br><br>
    <input type="Submit" class="boton"></input>
    </form>
</div>
    <br>
<br>
<br>
<br>
<button class="boton"><a href="Encargado.html">Volver</a></button>
        <br>
        <br>
        <button class="boton"><a href="Index.html">Salir</a></button>
        <br>
        <br>
<center><h1>Invitados</h1></center>
<br>
<table class="tarjeta">
    <tr>
        <td>ID_invitado</td>
        <td>ID_lugar</td>
        <td>patente_i</td>
        <td>hora_entrada_i</td>
        <td>horas_i</td>
        <td>deuda_i</td>
    </tr>
    <?php
        $sql="SELECT * FROM invitados";
        $result=mysqli_query($conexion,$sql);

        while($mostrar=mysqli_fetch_array($result)){
    ?>
    <tr>
        <td><?php echo $mostrar['id_invitado']?></td>
        <td><?php echo $mostrar['ID_lugar']?></td>
        <td><?php echo $mostrar['patente_i']?></td>
        <td><?php echo $mostrar['hora_entrada_i']?></td>
        <td><?php echo $mostrar['horas_i']?></td>
        <td><?php echo $mostrar['deuda_i']?></td>
    </tr>
    <?php
        }
        ?>
</table>
<br>

</body>
</html>