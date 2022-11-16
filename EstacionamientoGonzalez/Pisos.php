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
    <title>Administrar Pisos</title>
</head>
<body>
    <center>
        <div class="tarjeta">
    <h1>Agregar piso</h1>
    <form action="SP_AgregarPiso8.php" method ="post">
    <input type="Submit" class="boton">Agregar piso 8</input>
    </form>
    <form action="SP_AgregarPiso9.php" method ="post">
    <input type="Submit" class="boton">Agregar piso 9</input>
    </form>
    <form action="SP_AgregarPiso10.php" method ="post">
    <input type="Submit" class="boton">Agregar piso 10</input>
    </form>
</div>
    <br>
<br>
<br>
<br>
<button class="boton"><a href="Admin.html">Volver</a></button>
        <br>
        <br>
        <button class="boton"><a href="Index.html">Salir</a></button>
        <br>
        <br>
<center><h1>lugares</h1></center>
<br>
<table class="tarjeta">
    <tr>
        <td>ID_lugar</td>
        <td>piso</td>
        <td>lugar</td>
        <td>patente_l</td>
        <td>estado_l</td>
    </tr>
    <?php
        $sql="SELECT * FROM lugares";
        $result=mysqli_query($conexion,$sql);

        while($mostrar=mysqli_fetch_array($result)){
    ?>
    <tr>
        <td><?php echo $mostrar['id_lugar']?></td>
        <td><?php echo $mostrar['piso']?></td>
        <td><?php echo $mostrar['lugar']?></td>
        <td><?php echo $mostrar['patente_l']?></td>
        <td><?php echo $mostrar['estado_l']?></td>
    </tr>
    <?php
        }
        ?>
</table>
<br>
<br>
    </center>
</body>
</html>