<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <!-- Link archivo CSS -->
    <link rel="stylesheet" href="style.css">

    <title>Trabajo Integrador</title>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid col-10 d-flex justify-content-around">
          <a class="navbar-brand fs-6" href="./index.php"><img src="./img/codoacodo.png" alt="" style="width:25%">Conf Bs As</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dark offcanvas</h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./index.php#">La conferencia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php#oradores">Los oradores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php#lugar-y-fecha">El lugar y la fecha</a>
                    </li>
                    <li class="nav-item">
                        <a id="conviertete-orador" class="nav-link" href="./index.php#ser-orador">Conviértete en orador</a>
                    </li>
                    <li class="nav-item">
                        <a id="comprar-tickets" class="nav-link" href="./comprar-tickets.php">Comprar tickets</a>
                    </li>
                </ul>
            </div>
          </div>
        </div>
      </nav>

      <div class="pb-5"></div>
      <div class="pb-4"></div>
    
    <!-- 
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
            <div class="container-fluid col-6 d-flex justify-content-around">
                <div>
                    <a class="navbar-brand" href="#"><img src="./img/codoacodo.png" alt="" style="width:25%">Conf Bs As</a>
                </div>
                <div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navbarNavDropdown nav" id="menu">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">La conferencia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#oradores">Los oradores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#lugar-y-fecha">El lugar y la fecha</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#ser-orador">Conviértete en orador</a>
                    </li>
                    <li class="nav-item">
                        <a id="comprar-tickets" class="nav-link" href="./comprar-tickets.html">Comprar tickets</a>
                    </li>
                </ul>
            </div>
            
        </nav>
    -->

    <!-- Fin Navbar -->