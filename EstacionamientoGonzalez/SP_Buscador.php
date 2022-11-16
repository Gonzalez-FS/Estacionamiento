<?php

$patente_l=$_POST['patente_l'];

session_start();
$_SESSION['patente_l']=$patente_l;

include('db.php');

$consulta="SELECT * FROM lugares WHERE patente_l = '$patente_l' ";
$resultado = mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if ($filas) {
    include("Buscador.php");
    ?>
    <center>
    <table class="tarjeta">
    <tr>
        <td>ID_lugar</td>
        <td>piso</td>
        <td>lugar</td>
        <td>patente_l</td>
        <td>estado_l</td>
    </tr>
    <?php
        $sql="SELECT * FROM lugares where patente_l = '$patente_l'";
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
<form action="SP_QuitarPatente.php" method ="post" class="tarjeta">
    <head>Patente a quitar del estacionamiento: <input type="text" id="patente_l" name="patente_l" autoComplete='off'/></head>
    <br>
    <header> </header>
    <input type="Submit" class="boton"></input>
    </form>
  </center>
        <?php
} else {
    include("Buscador.php");
  ?>
  <center>
  <h1>Error al ingresar</h1>
</center>
      <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);

  ?>