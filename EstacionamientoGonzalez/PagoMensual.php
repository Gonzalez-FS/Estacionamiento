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
    <title>Informes</title>
</head>
<body>
    <center>
        <div class="tarjeta">
        <h1>Cobrar</h1>
    <form action="SP_AgregarUsuario.php" method ="post">
    <head>Nombre: <input type='text' id='nombre' name='nombre' autoComplete='off'/></head><br>
    <head>Apellido: <input type='text' id='apellido' name='apellido' autoComplete='off'/></head><br>
    <head>Patente: <input type='text' id='patente_u' name='patente_u' autoComplete='off'/></head><br>
    <head>Marca: <input type='text' id='marca' name='marca' autoComplete='off'/></head><br>
    <head>Modelo: <input type='text' id='modelo' name='modelo' autoComplete='off'/></head><br>
    <head>Teléfono: <input type='text' id='telefono' name='telefono' autoComplete='off'/></head><br>
    <head>Dirección: <input type='text' id='direccion' name='direccion' autoComplete='off'/></head><br>
    <head>Lugar: <input type='text' id='lugar' name='lugar' autoComplete='off'/></head><br>
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
<h1>Lugares</h1>
<br>
<table class="tarjeta">
    <tr>
        <td>piso</td>
        <td>lugar</td>
        <td>estado_l</td>
    </tr>
    <?php
        $sql="SELECT piso,lugar,estado_l FROM lugares;";
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
<br>
</center>
</body>
</html>