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
    <h1>Acciones</h1>
    <form action="SP_NuevoDia.php" method ="post">
    <input type="Submit" class="boton">Nuevo día</input>
    </form>
    <form action="SP_NuevoMes.php" method ="post">
    <input type="Submit" class="boton">Nuevo mes</input>
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
<center><h1>Informes</h1></center>
<br>
<table class="tarjeta">
    <tr>
        <td>ID_informe</td>
        <td>tipo</td>
        <td>cantidad_total</td>
    </tr>
    <?php
        $sql="SELECT * FROM informes";
        $result=mysqli_query($conexion,$sql);

        while($mostrar=mysqli_fetch_array($result)){
    ?>
    <tr>
        <td><?php echo $mostrar['id_informe']?></td>
        <td><?php echo $mostrar['tipo']?></td>
        <td><?php echo $mostrar['cantidad_total']?></td>
    </tr>
    <?php
        }
        ?>
</table>
<br>
<center><h1>Morosos</h1></center>
<br>
<table class="tarjeta">
    <tr>
        <td>ID_usuario</td>
        <td>Nombre</td>
        <td>apellido</td>
        <td>telefono</td>
        <td>direccion</td>
        <td>marca</td>
        <td>modelo</td>
        <td>ID_lugar</td>
        <td>patente_u</td>
        <td>estado</td>

    </tr>
    <?php
        $sql="SELECT * FROM usuarios where estado='moroso'";
        $result=mysqli_query($conexion,$sql);

        while($mostrar=mysqli_fetch_array($result)){
    ?>
    <tr>
        <td><?php echo $mostrar['id_usuario']?></td>
        <td><?php echo $mostrar['Nombre']?></td>
        <td><?php echo $mostrar['apellido']?></td>
        <td><?php echo $mostrar['telefono']?></td>
        <td><?php echo $mostrar['direccion']?></td>
        <td><?php echo $mostrar['marca']?></td>
        <td><?php echo $mostrar['modelo']?></td>
        <td><?php echo $mostrar['ID_lugar']?></td>
        <td><?php echo $mostrar['patente_u']?></td>
        <td><?php echo $mostrar['estado']?></td>
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