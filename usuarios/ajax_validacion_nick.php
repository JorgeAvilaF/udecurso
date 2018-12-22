<?php include '../conexion/conexion.php';

$nick = $con->real_escape_string($_POST['nick']);

$sel = $con->query("SELECT id_usuario FROM usuarios WHERE nick = '$nick'");
$row = mysqli_num_rows($sel);
if ($row != 0) {
  echo "<label style = 'color:red;'>Existe este nick en el sistema.</label>";
}
else{
  echo "<label style = 'color:green;'>El nick esta disponible.</label>";
}
$con->close();
?>
