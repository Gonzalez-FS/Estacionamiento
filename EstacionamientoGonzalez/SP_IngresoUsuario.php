<?php

$patente_u=$_POST['patente_u'];

session_start();
$_SESSION['patente_u']=$patente_u;

include('db.php');

$consulta="SELECT * FROM Usuarios WHERE patente_u = '$patente_u' and estado = 'Activo' ";
$resultado = mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if ($filas) {
    include("Usuario.php");
    ?>
    <center>
    <table class="tarjeta">
    <tr>
        <td>lugar</td>
    </tr>
    <?php
        $sql="SELECT lugar FROM lugares WHERE id_lugar = (select id_lugar from Usuarios where patente_u = '$patente_u');";
        $result=mysqli_query($conexion,$sql);
       while($mostrar=mysqli_fetch_array($result)){
    ?>
    <tr>
        <td><?php echo $mostrar['lugar']?></td>
    </tr>
    <?php
        }
        ?>
</table>
  </center>
        <?php
} else {
    include("IngresoUsuario.html");
  ?>
  <center>
  <h1>Error al ingresar</h1>
</center>
      <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);

  ?>