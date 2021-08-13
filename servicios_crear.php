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
<style>body {background-color: #aeddd9;}</style>
<div class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    Formulario Servicios Adicionales- Crear
                </div>
                <div class="card-body">
                    <form action="servicios_guardar.php" method="POST">
                        <div class="mb-3">
                            <label for="tipo_servicio" class="form-label">Tipo de servicio</label>
                            <div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="tipo_servicio" id="tipo_servicio1" value="Medicamentos">
                                    <label class="form-check-label" for="tipo_servicio1">
                                        Medicamentos
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="tipo_servicio" id="tipo_servicio2" value="Estetica">
                                    <label class="form-check-label" for="tipo_servicio2">
                                        Estetica
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="tipo_servicio" id="tipo_servicio3" value="Alimento">
                                    <label class="form-check-label" for="tipo_servicio3">
                                        Alimento
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="tipo_servicio" id="tipo_servicio4" value="Entretenimiento">
                                    <label class="form-check-label" for="tipo_servicio4">
                                        Entretenimiento
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="tipo_servicio" id="tipo_servicio5" value="Spa">
                                    <label class="form-check-label" for="tipo_servicio5">
                                        Spa
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="tipo_servicio" id="tipo_servicio6" value="Medico">
                                    <label class="form-check-label" for="tipo_servicio6">
                                        Médico
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="tipo_servicio" id="tipo_servicio7" value="Otro">
                                    <label class="form-check-label" for="tipo_servicio7">
                                        Otro
                                    </label>
                                </div>
                        <div class="mb-3">
                            <label for="nombre_servicio" class="form-label">Nombre del servicio</label>
                            <input type="text" name="nombre_servicio" required class="form-control" id="nombre_servicio" aria-describedby="nombre_servicioHelp">
                            <div id="nombre_servicioHelp" class="form-text">Describe el servicio que se otorga</div>
                        </div>
                        <div class="mb-3">
                            <label for="costo" class="form-label">Costo del servicio</label>
                            <input type="text" name="costo" required class="form-control" id="costo" aria-describedby="costoHelp">
                            <div id="costoHelp" class="form-text">Costo del servicio otorgado</div>
                        </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Crear</button>
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
