<?php

include("conexion.php");

$conexion = conexion();

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$email = $_POST["email"];
//echo $inscripto . " " . $nombre . $apellido . $email;

$sql = "INSERT INTO inscriptos VALUES(NULL, '$nombre', '$apellido', '$email')";
$query = mysqli_query($conexion, $sql);

if($query){
    header("Location: index.php");
}

//redirección de página al enviar el form:
header("Location: exito.php");

?>