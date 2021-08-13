<!-- Vista -->
<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de facturas</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<style>
  body {
      margin: 0;
      padding: 0;
      background: url(perrito_fondo23.jpg) no-repeat center top;
      background-size: cover;
      font-family: sans-serif;
      height: 50vh;
  }
  </style>
<body>
    <!-- Barra de Navegación -->
    <div class="container">
        <div class="navbar navbar-dark bg-dark">
            <ul class="nav justify-content-center" .justify-content-end:>
                <li class="nav-item">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Propietarios
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="propietarios_crear.php">Crear</a></li>
                        <li><a class="dropdown-item" href="ver_propietarios.php">Ver propietarios</a></li>

                    </ul>
                </li>
                <li class="nav-item">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Perros
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="formulario_perro.php">Crear</a></li>
                        <li><a class="dropdown-item" href="ver_perros.php">Ver perros</a></li>

                    </ul>
                </li>

                <li class="nav-item">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Servicios
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="servicios_crear.php">Añadir servicio</a></li>
                        <li><a class="dropdown-item" href="ver_servicios_ordenes.php">Ver servicios</a></li>

                    </ul>
                </li>

                <li class="nav-item">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Recamaras
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="ver_recamaras.php">Ver Recamaras</a></li>
                       

                    </ul>
                </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="consulta_factura.php">Facturación</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Salir</a>
                </li>
        </div>
        <!-- Formulario -->
        <style>
            body {
                background-color: #aeddd9;
            }
        </style>
        <div class="container">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            Generar Factura
                        </div>
                        <div class="card-body">
                            <form action="factura.php" method="POST">
                                <div class="mb-3">
                                    <label for="id_perro" class="form-label">Id del perro</label>
                                    <input type="text" name="id_perro" required class="form-control" id="id_perro" aria-describedby="id_perroHelp">
                                    <div id="id_perroHelp" class="form-text">Ingresa el id del perro</div>
                                </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary align-content-center">Generar Factura</button>

                    <?php


                    ?>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-3"></div>
    </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
</body>

</html>