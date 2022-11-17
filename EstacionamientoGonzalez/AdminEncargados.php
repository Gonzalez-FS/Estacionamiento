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
    <title>Administrar Encargados</title>
</head>
<body>
    <center>
        <div class="tarjeta">
    <h1>Agregar Encargado</h1>
    <form action="SP_AgregarEncargado.php" method ="post">
    <head>Username <input type='text' id='username_E' name='username_E' autoComplete='off'/></head>
    <br>
    <head>Contraseña <input type="text" id="password_E" name="password_E" autoComplete='off'/></head>
    <br>
    <head>Turno <input type='text' id='turno_E' name='turno_E' autoComplete='off'/></head>
    <br>
    <header> </header>
    <input type="Submit" class="boton"></input>
    </form>
</div>
    <br>
    <br>
    <div class="tarjeta">
    <h1>Eliminar Encargado</h1>
    <form action="SP_EliminarEncargado.php" method ="post">
        <head>Username <input type='text' id='username_Edlt' name='username_Edlt' autoComplete='off'/></head>
        <header> </header>
        <input type="Submit" class="boton"></input>
        </form>
    </div>
<br>
<br>
<br>
<table class="tarjeta">
    <tr>
        <td>ID_encargado</td>
        <td>username_E</td>
        <td>password_E</td>
        <td>turno_E</td>
    </tr>
    <?php
        $sql="SELECT * FROM encargados";
        $result=mysqli_query($conexion,$sql);

        while($mostrar=mysqli_fetch_array($result)){
    ?>
    <tr>
        <td><?php echo $mostrar['id_encargado']?></td>
        <td><?php echo $mostrar['username_e']?></td>
        <td><?php echo $mostrar['password_e']?></td>
        <td><?php echo $mostrar['turno_e']?></td>
    </tr>
    <?php
        }
        ?>
</table>
<br>
<br>

        <button class="boton"><a href="Admin.html">Volver</a></button>
        <br>
        <br>
        <button class="boton"><a href="Index.html">Salir</a></button>
    </center>
</body>
</html>