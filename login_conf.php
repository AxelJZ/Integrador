<?php

var_dump($_POST);

$email = $_POST["email"];
$password = $_POST["password"];

//conectar con la BD
//$query = "SELECT * FROM usuarios
//WHERE email = $email AND clave = $password;
//$fila = fetch(query)
//if($fila){     //en lugar de $fila uso un dato inventado

if($email == "admin@mail.com") {
    session_start();  //se inicia la sesión
    //echo "sesion iniciada";
    $_SESSION["email"] = $email; //guardamos el email
    header("Location: listaInscripcion.php");
} else {
    //echo "error sesion no iniciada";
    header("Location: login.php");
}

?>