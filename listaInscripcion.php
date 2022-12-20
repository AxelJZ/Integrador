<?php 

session_start();
if(isset($_SESSION['email'])){


    include("conexion.php"); 
    include("header.php"); 

    $conexion = conexion();

    $sql = "SELECT * FROM inscriptos";

    $query = mysqli_query($conexion, $sql);

    ?>

<div class="container w-50 pt-5">
    <nav class="navbar navbar-expand-lg bg-light">
    <div class="container d-flex justify-content-between align-middle text-center">
        <form id="form" name="form" method="GET" class="d-flex col-7" role="search">
            <input class="form-control me-2" type="search" placeholder="Buscar orador" aria-label="Search">
            <button class="btn btn-outline-success" type="submit" name="btnBuscar" value="Buscar">Buscar</button>
        </form>
        <button type="logout" class="btn btn-danger col-3"><a href="logout.php" class="text-decoration-none text-white">Cerrar sesión</a></button>
    </div>
    </nav>
</div>

    <!--
    <div class="container pt-5 text-center">
        <button type="logout" class="btn btn-danger mt-5"><a href="logout.php" class="text-decoration-none text-white">Cerrar sesión</a></button>
    </div>
    -->

    <div class="container pt-3 text-center">
        <h3 class="text-uppercase">Listado de oradores inscriptos:</h1>
    </div>

    <div class="pt-3 w-50 mx-auto text-center">
        <table class="container table table-striped border shadow p-3 mb-5 bg-body">
                <thead class="table-dark">
                    <!--<th>id</th> -->
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th></th>
                    <th></th>
                </thead>
                <tbody>
                    <?php
                        while($fila = mysqli_fetch_assoc($query)){
                    ?>        
                    <tr>
                        <!--<td><?php echo $fila["id"] ?></td> -->
                        <td><?php echo $fila["nombre"] ?></td>
                        <td><?php echo $fila["apellido"] ?></td>
                        <td><?php echo $fila["email"] ?></td>
                        <td class=""><a href="formEditarOrador.php?id=<?php echo $fila['id']?>"><button class="btn btn-secondary"><i class="bi bi-pencil-square"></i></button></a></td>
                        <td class=""><a href="eliminarOrador.php?id=<?php echo $fila['id']?>"><button class="btn btn-danger"><i class="bi bi-trash"></i></button></a></td>
                    </tr>
                    <?php    }  ?>
                    </main>
                </tbody>
            </table>
    </div>

<?php
} else {
    header("location: login.php");
}

include("footer.php");
?>