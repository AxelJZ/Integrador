<?php

include("conexion.php");

$conexion = conexion();

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$email = $_POST["email"];
//echo $inscripto . " " . $nombre . $apellido;

$sql = "INSERT INTO inscriptos VALUES(NULL, '$nombre', '$apellido', '$email')";
$query = mysqli_query($conexion, $sql);

if($query){
    header("Location:index.php");
}

// Redirección de página al enviar form:
header("Location:exito.php");

?>