<?php

include "header.php";


/////////////////////
//   LOGIN FORM    //
/////////////////////

?>

<div class="container w-25 mt-5 mb-5 pt-5 pb-5 border shadow-lg p-3 mb-5 bg-body rounded">
    <div class="">
    <h3 class="text-center">INICIAR SESIÓN:</h3>
    <form action="login_conf.php" method="POST" class="px-4 py-3">
        <div class="mb-3">
        <label for="exampleDropdownFormEmail1" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="email@example.com" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" size="30" required>
        </div>
        <div class="mb-3">
        <label for="exampleDropdownFormPassword1" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
        <div class="mb-3">
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="dropdownCheck">
            <label class="form-check-label" for="dropdownCheck">
            Recordar sesión
            </label>
        </div>
        </div>
        <button type="submit" class="btn btn-primary">Iniciar sesión</button>
    </form>
  </div>
</div>

<?php
include "footer.php";
?>