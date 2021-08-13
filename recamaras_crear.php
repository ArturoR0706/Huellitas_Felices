<?php

?>
<!-- Vista -->
<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Propietarios</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

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
                        <li><a class="dropdown-item" href="recamaras_crear.php">Añadir recamara</a></li>

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
                            Formulario Recámaras
                        </div>
                        <div class="card-body">
                            <form action="recamaras_guardar.php" method="POST">

                                <div class="mb-3">
                                    <label for="llegada" class="form-label">Fecha de Llegada</label>
                                    <input type="date" name="llegada" required class="form-control" id="llegada" aria-describedby="llegadaHelp">
                                    <div id="llegadaHelp" class="form-text">Marca la Fecha de Llegada a la Habitación</div>
                                </div>
                                <div class="mb-3">
                                    <label for="salida" class="form-label">Fecha de salida</label>
                                    <input type="date" name="salida" required class="form-control" id="salida" aria-describedby="salidaHelp">
                                    <div id="salidaHelp" class="form-text">Marca la Fecha de Salida de la Habitación</div>
                                </div>
                                <div class="mb-3">
                                    <label for="costo" class="form-label">Costo</label>
                                    <input type="text" name="costo" required class="form-control" id="costo" aria-describedby="costoHelp">
                                    <div id="costoHelp" class="form-text">Escribe el costo</div>
                                </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary align-content-center">Crear</button>
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