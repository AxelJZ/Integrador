<?php
/*
echo "<pre>";
var_dump($_POST);
echo "<pre>";
*/

include("conexion.php");

$conexion = conexion();

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$email = $_POST["email"];

$sql = "UPDATE inscriptos SET nombre='$nombre', apellido='$apellido', email='$email' WHERE id=$id";

$query = mysqli_query($conexion, $sql);

if($query){
    Header("Location: listaInscripcion.php");
};


?>