<?php
include("conexion.php");

$conexion = conexion();

$id = $_GET["id"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$mail = $_POST["email"];

$sql = "UPDATE inscriptos SET nombre='$nombre', apellido='$apellido', email='$email' WHERE id=$id";

$query = mysqli_query($conexion, $sql);

if($query){
    Header("Location: listaInscripcion.php");
};


?>