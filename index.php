<?php
include("conexion.php");

$conexion = conexion();

/*
echo "<pre>";
print_r($conectar);
echo "</pre>";
*/

include("header.php");
?>

    <!-- Portada -->
    
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./img/ba1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block position-absolute bot-0 start-50 translate-middle">
              <h5 id="tit-p">Conf Bs As</h5>
              <p id="txt-p">Bs As llega por primera vez a Argentina. Un evento para compartir con nuestra comunidad el conocimiento y experiencia de los expertos que están creando el futuro de Internet. Ven a conocer a miembros de primer nivel que tenemos para ti. Te esperamos!</p>
              <button type="button" class="btn btn-outline-light mb-3 btn-portada"><a id="btn-oradores" href="#ser-orador">Quiero ser orador</a></button>
              <button type="button" class="btn btn-success ms-2 mb-3 btn-portada" id="btn-comprar-tickets"><a id="btn-comprar-tkt" href="./comprar-tickets.php">Comprar tickets</a></button>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./img/ba3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block  position-absolute bot-0 start-50 translate-middle">
              <h5>Conf Bs As</h5>
              <p>Bs As llega por primera vez a Argentina. Un evento para compartir con nuestra comunidad el conocimiento y experiencia de los expertos que están creando el futuro de Internet. Ven a conocer a miembros de primer nivel que tenemos para ti. Te esperamos!</p>
              <button type="button" class="btn btn-outline-light mb-3 btn-portada"><a id="btn-oradores" href="#ser-orador">Quiero ser orador</a></button>
              <button type="button" class="btn btn-success ms-2 mb-3 btn-portada" id="btn-comprar-tickets"><a id="btn-comprar-tkt" href="./comprar-tickets.php">Comprar tickets</a></button>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./img/ba2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block  position-absolute bot-0 start-50 translate-middle">
              <h5>Conf Bs As</h5>
              <p>Bs As llega por primera vez a Argentina. Un evento para compartir con nuestra comunidad el conocimiento y experiencia de los expertos que están creando el futuro de Internet. Ven a conocer a miembros de primer nivel que tenemos para ti. Te esperamos!</p>
              <button type="button" class="btn btn-outline-light mb-3 btn-portada"><a id="btn-oradores" href="#ser-orador">Quiero ser orador</a></button>
              <button type="button" class="btn btn-success ms-2 mb-3 btn-portada" id="btn-comprar-tickets"><a id="btn-comprar-tkt" href="./comprar-tickets.php">Comprar tickets</a></button>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    
    <!--
    <div class="container-fluid portada text-end">
        <div class="portada-elementos row col-sm-12">
            <div class="texto-portada col-lg-6 offset-lg-6">
                <h1>Conf Bs As</h1>
                <p>Bs As llega por primera vez a Argentina. Un evento para compartir con nuestra comunidad el conocimiento y experiencia de los expertos que están creando el futuro de Internet. Ven a conocer a miembros de primer nivel que tenemos para ti. Te esperamos!</p>
            </div>
            <div class="portada-btn-links">
                <button type="button" class="btn btn-outline-light mb-3"><a id="btn-oradores" href="#ser-orador">Quiero ser orador</a></button>
                <button type="button" class="btn btn-success ms-2 mb-3" id="btn-comprar-tickets"><a id="btn-comprar-tkt" href="./comprar-tickets.php">Comprar tickets</a></button>
            </div>
        </div>
    </div>
    -->
    <!-- Fin portada -->


    <!-- Grilla -->
    <div class="container mb-4">

        <div class="titulos">
            <a name="oradores"><p>CONOCE A LOS</p></a>
            <h2>ORADORES</h2>
        </div>

        <div class="card-group">
            <div class="card mx-1 shadow-sm p-1 mb-5 bg-body rounded">
                <img src="./img/stevejobs.jpg" class="card-img-top" alt="...">
                <div class="card-body border">
                    <span class="badge text-bg-warning">JavaScript</span>
                    <span class="badge text-bg-info text-white">React</span>
                    <h5 class="card-title pt-2">Steve Jobs</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis impedit architecto veniam saepe, possimus ipsum accusantium rem totam ad et qui laboriosam suscipit ipsa placeat sunt esse. Consequuntur, earum nemo.</p>
                </div>
            </div>
            <div class="card mx-1 shadow-sm p-1 mb-5 bg-body rounded border-start">
                <img src="./img/bill.jpg" class="card-img-top" alt="...">
                <div class="card-body border">
                    <span class="badge text-bg-warning">JavaScript</span>
                    <span class="badge text-bg-info text-white">React</span>
                    <h5 class="card-title pt-2">Bill Gates</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis impedit architecto veniam saepe, possimus ipsum accusantium rem totam ad et qui laboriosam suscipit ipsa placeat sunt esse. Consequuntur, earum nemo.</p>
                </div>
            </div>
            <div class="card mx-1 shadow-sm p-1 mb-5 bg-body rounded border-start">
                <img src="./img/ada.jpeg" class="card-img-top" alt="...">
                <div class="card-body border">
                    <span class="badge text-bg-secondary">Negocios</span>
                    <span class="badge text-bg-danger">Startups</span>
                    <h5 class="card-title pt-2">Ada Lovelace</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis impedit architecto veniam saepe, possimus ipsum accusantium rem totam ad et qui laboriosam suscipit ipsa placeat sunt esse. Consequuntur, earum nemo.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin grilla -->


    <div class="container-fluid contenedor-honolulu">
        <div class="card mb-3" style="max-width: 100%;">
            <div class="row g-0">
                <div class="col-md-6">
                    <img src="./img/honolulu.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                <div class="col-md-6 card-honolulu">
                    <div class="card-body">
                        <a name="lugar-y-fecha"><h4 class="card-title">Bs As - Octubre</h4></a>
                        <p class="card-text">Buenos Aires es la provincia y localidad más grande del estado de Argentina, en los Estados Unidos. Honolulu es la más sureña de entre las principales ciudades estadounidenses. Aunque el nombre de Honolulu se refiere al área urbana e nla costa sureste de la isla de Oahu, la ciudad y el condado de Honolulu han formado una ciudad-condado consolidada que cubre toda la ciudad (aproximadamente 600km de superficie).</p>
                        <button type="button" class="btn btn-outline-light">Conocé más</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Formulario -->
    <div class="container mt-5 mb-3 border shadow p-3 mb-5 bg-body rounded" style="width:50%">

        <div class="titulos">
            <a name="ser-orador"><p>CONVIÉRTETE EN UN</p></a>
            <h2>ORADOR</h2>
            <p>Anótate como orador para dar una charla ignite. Cuéntanos de qué quieres hablar!</p>
        </div>
        
        <form action="agregarOrador.php" method="POST">
            <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating text-color">
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required minlength="3" maxlength="15" required>
                        <label for="floatingText">Nombre</label>
                        </div>
                </div>
                <div class="col-md">
                    <div class="form-floating text-color">
                        <input type="text" class="form-control" id="apellido" name="apellido"  placeholder="Apellido"
                        required minlength="3" maxlength="15" required>
                        <label for="floatingText">Apellido</label>
                        </div>
                </div>
                <div class="form-floating mb-1 mt-2">
                    <div class="form-floating text-color">
                        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" size="30" required>
                        <label for="floatingInput">Email</label>
                    </div>
                </div>
                <div class="form-floating mt-2">
                    <div class="form-floating text-color">
                        <textarea class="form-control" placeholder="¿Sobre qué queres hablar?" id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">¿Sobre qué queres hablar?</label>
                        </div>
                        <p class="text-color">Recuerda incluir un título para tu charla.</p>
                    </div>
                </div>
                <div>
                <button type="submit" id="submit" class="btn btn-success" style="width: 100%">Enviar</button>
            </div>

            <div>
                <p id="validacionNombre" class="text-danger"></p>
                <p id="validacionApellido" class="text-danger"></p>
            </div>
        </form>
    </div>
    <!-- Fin formulario -->

<?php 
include "footer.php" 
?>