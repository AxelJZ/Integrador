<?php

include("conexion.php");
include("header.php");

$conexion = conexion();

$id = $_GET["id"];

$sql = "SELECT * FROM inscriptos WHERE id=$id";
$query = mysqli_query($conexion, $sql);
$fila = mysqli_fetch_assoc($query);

?>

<div class="container w-50 vh-100 p-5">
    <div class="container card p-5 bg-dark my-5 shadow p-3 mb-5 rounded">
            <h4 class="text-white pb-4 text-center">Editar Datos</h4>
            <form action="editarOrador.php" method="POST" class="row g-3">
                <div class="col d-none">
                    <input type="text" class="" id="id" name="id" value="<?php $fila["id"]?>" hidden>
                </div>
                <div class="">
                    <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $fila["nombre"]?>">
                </div>
                <div class="">
                    <input type="text" class="form-control" id="apellido" name="apellido" value="<?php echo $fila["apellido"]?>">
                </div>
                <div class="">
                    <input type="text" class="form-control" id="email" name="email" value="<?php echo $fila["email"]?>" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" size="30" required">
                </div>
                <div class="">
                    <button type="submit" class="btn btn-primary w-100">Modificar</button>
                </div>
                
            </form>
    </div>
</div>

<?php
/*
//validar que el formulario se ha enviado
if( isset ($_REQUEST['editar'])) {
    //crear la consulta
    $query = mysqli_query($conexion, $sql);
    //comprobar el resultado de la consulta
    if ($query) {
        echo "Registro editado correctamente";
    } else {
        echo "Error al editar el registro";
    }
}
*/
include("footer.php");
?>