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
    <title>Buscador</title>
</head>
<body>
    <center> <br>
<button class="boton"><a href="Encargado.html">Volver</a></button>
    <button class="boton"><a href="Index.html">Salir</a></button><br>
<br>
    <form action="SP_Buscador.php" method ="post" class="tarjeta">
    <head>Patente a buscar: <input type="text" id="patente_l" name="patente_l" autoComplete='off'/></head>
    <header> </header><br><br>
    <input type="Submit" class="boton"></input>
    </form>
    <br><br>
    </center>
</body>
</html>