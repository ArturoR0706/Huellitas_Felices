<?php
require_once './conexion_formularios.php';

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>
<!-- Barra de Navegación -->
<div class="container">
<div class="container">
        <div class="navbar navbar-dark bg-dark" >
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
</div>
<!-- Formulario-->
<style>body {background-color: #aeddd9;}</style>
<div class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    Formulario Propietarios
                </div>
                <div class="card-body">
                    <form action="propietarios_guardar.php" method="POST">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre(s)</label>
                            <input type="text" name="nombre" required class="form-control" id="nombre" aria-describedby="nombreHelp">
                            <div id="nombreHelp" class="form-text">Nombre(s) del Propietario</div>
                        </div>
                        <div class="mb-3">
                            <label for="apellido" class="form-label">Apellido del Propietario</label>
                            <input type="text" name="apellido" required class="form-control" id="apellido" aria-describedby="primer_apellidoHelp">
                            <div id="apellidoHelp" class="form-text">Apellido del Propietario</div>
                        </div>
                        <div class="mb-3">
                            <label for="celular" class="form-label">Número celular</label>
                            <input type="text" name="celular" required class="form-control" id="celular" aria-describedby="celularHelp">
                            <div id="celularHelp" class="form-text">Digita tu numero de celular</div>
                        </div>
                        <div class="mb-3">
                            <label for="direccion" class="form-label">Dirección</label>
                            <input type="text" name="direccion" required class="form-control" id="direccion" aria-describedby="direccionHelp">
                            <div id="direccionHelp" class="form-text">Escribe la dirección del Propietario</div>
                        </div>
                        <div class="mb-3">
                            <label for="id_perro" class="form-label">Id perro</label>
                            <input type="text" name="id_perro" required class="form-control" id="id_perro" aria-describedby="id_perroHelp">
                            <div id="id_perroHelp" class="form-text">Escribe el id_perro de la mascota</div>
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


