<?php
include("conexion.php");

$conexion = conexion();

$id = $_GET["id"];

// $sql = "UPDATE inscriptos SET nombre='$nombre', apellido='$apellido', email='$email' WHERE id=$id";

$query = mysqli_query($conexion, $sql);

if($query){
    Header("Location: listaInscripcion.php");
}


?>