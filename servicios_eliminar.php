<?php

?>
<!-- Vista -->
<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Servicios Adicionales</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<!-- Barra de Navegación -->
<div class="container">

    <div class="navbar navbar-dark bg-dark" >
        <li class="nav justify-content-center">

        <li class="nav-item">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Propietario
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="propietarios_actualizar.php">Actualizar</a></li>
                <li><a class="dropdown-item" href="propietarios_eliminar.php">Eliminar</a></li>
            </ul>
        </li>
        <li class="nav-item">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Perro
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="perro_actualizar.php">Actualizar</a></li>
                <li><a class="dropdown-item" href="perro_eliminar.php">Eliminar</a></li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="perro_crear.php">Nuevo registro</a>
        </li>
        <li class="nav-item">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Servicios
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Ver servicios</a></li>
                <li><a class="dropdown-item" href="servicios_crear.php">Añadir servicio</a></li>
                <li><a class="dropdown-item" href="servicios_eliminar.php">Eliminar servicio</a></li>
            </ul>
        </li>

        <li class="nav-item">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Recamaras
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Ver Recamaras</a></li>
                <li><a class="dropdown-item" href="recamaras_crear.php">Añadir recamara</a></li>
                <li><a class="dropdown-item" href="recamaras_eliminar.php">Eliminar servicio</a></li>
            </ul>
        </li>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="consulta_factura.html">Estado de cuenta</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="login.php">Salir</a>
        </li>


    </div>

</div>
<!-- Formulario -->
<style>body {background-color: #aeddd9;}</style>
<div class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    Formulario Servicios Adicionales- Eliminar
                </div>
                <div class="card-body">
                    <form action="servicios_geliminar.php" method="POST">
                        <div class="mb-3">
                            <label for="id_servicio" class="form-label">Id de Servicio</label>
                            <input type="text" name="id_servicio" required class="form-control" id="id_servicio" aria-describedby="id_sevicioHelp">
                            <div id="id_servicioHelp" class="form-text">Escribe el Id del servicio que deseas eliminar</div>
                        </div>
                </div>
            <button type="submit" class="btn btn-primary align-content-center">Eliminar</button>
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
