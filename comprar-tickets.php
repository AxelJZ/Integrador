<?php 
include "header.php";
?>

    <!-- Ticket Cards group -->

    <div class="container row pt-5 pb-5 mx-auto">
      <div class="col-sm-4">
        <div id="ticket-card1" class="card ticket-cards border border-2 border-primary">
          <div class="card-header bg-primary"></div>
          <div class="card-body">
            <h2 class="card-title">Estudiante</h2>
            <p class="card-text">Tienen un descuento</p>
            <p class="card-text" id="desc-ticket">80%</p>
            <p class="card-text" id="documentacion">* presentar documentación</p>
            <a href="#ser-orador" id="aplicarEte" class="btn btn-primary">Aplicar</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div id="ticket-card2" class="card ticket-cards border border-2 border-info">
          <div class="card-header bg-info""></div>
          <div class="card-body">
            <h2 class="card-title">Trainee</h5>
            <p class="card-text">Tienen un descuento</p>
            <p class="card-text" id="desc-ticket">50%</p>
            <p class="card-text" id="documentacion">* presentar documentación</p>
            <a href="#ser-orador" id="aplicarTra" class="btn btn-info">Aplicar</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div  id="ticket-card3" class="card ticket-cards border border-2 border-warning">
          <div class="card-header bg-warning""></div>
          <div class="card-body">
            <h2 class="card-title">Junior</h5>
            <p class="card-text">Tienen un descuento</p>
            <p class="card-text" id="desc-ticket">15%</p>
            <p class="card-text" id="documentacion">* presentar documentación</p>
            <a href="#ser-orador" id="aplicarJnr" class="btn btn-warning">Aplicar</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Fin Ticket Cards group -->

    <!-- Formulario -->
    <div id="ticket-form" class="container mb-3" style="width:50%" name="ser-orador">

      <div class="titulos text-center row">
          <a name="ser-orador">VENTA</a>
          <h2>VALOR DE TICKET $200</h2>
      </div>

      <form>
        <div class="row g-2">
          <div class="col-md mb-3">
            <input 
              id="nombre"
              type="text" 
              class="form-control"
              placeholder="Nombre"
              aria-label="Nombre">
          </div>
          <div class="col-md mb-3">
            <input 
              id="apellido"
              type="text" 
              class="form-control"
              placeholder="Apellido"
              aria-label="Apellido">
          </div>
          <div class="">
            <div class="col mb-1"></div>
              <input 
                id="email"
                type="email" 
                class="form-control"
                placeholder="Correo"
                aria-label="Email">
          </div>
          <div class="col-md mb-4 mt-3">
            <label>Cantidad</label>
            <input 
                id="cantidad"
                type="text"
                class=form-control
                placeholder="Cantidad"
                aria-label="Cantidad">
          </div>
          <div class="col-md mb-4 mt-3">
            <label>Categoría</label>
            <select id="categoria" class="form-select" aria-label="Default select example">
              <option value="seleccione" selected>----Seleccione----</option>
              <option value="200">Sin categoría</option>
              <option value="40">Estudiante</option>
              <option value="100">Trainee</option>
              <option value="170">Junior</option>
            </select>
          </div>
          </div>
          <div class="alert alert-primary pb-1 mb-4" role="alert">
            <p id="mensajePagar">Total a Pagar: $</p>
          </div>
          <div class="row g-2 ">
            <div class="col-md mb-3">
              <button 
              id="borrar"
              type="button" 
              class="btn btn-danger"
              style="width: 100%">Borrar</button>
            </div>
            <div class="col-md mb-3">
              <button 
              id="enviar"
              type="button" 
              class="btn btn-success"
              style="width: 100%">Resumen</button>
            </div>
          </div>

        <div>
          <p id="mensajeNombre" class="text-danger"></p>
          <p id="mensajeApellido" class="text-danger"></p>
          <p id="mensajeEmail" class="text-danger"></p>
          <p id="mensajeCantidad" class="text-danger"></p>
          <p id="mensajeCategoria" class="text-danger"></p>
        </div>
      </form>
  </div>
  <!-- Fin formulario --> 

  <?php include "footer.php" ?>