<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<style>body {background-color: #aeddd9;}</style>
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
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    Formulario Perros
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <form action='formulario_perro_guarda.php' method='POST' enctype='multipart/form-data'>
                            <label for="nombre" class="form-label">Nombre del perro</label>
                            <input type="text" name="nombre" required class="form-control form-control-sm" id="nombre" value="<?php echo htmlentities($_POST['nombre'] ?? '') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="color" class="form-label">Color del pelaje</label>
                        <input type="text" name="color" required class="form-control form-control-sm" id="color" value="<?php echo htmlentities($_POST['color'] ?? '') ?>">
                    </div>
                    <div>
                    <label for="exampleColorInput" class="form-label">Referencia del color de pelaje</label>
                    <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#563d7c" title="Choose your color">
                </div>
            <div>
            <label for="raza" class="form-label">Raza</label>
            <input type="text" name="raza" required class="form-control form-control-sm" id="raza" value="<?php echo htmlentities($_POST['raza'] ?? '') ?>">
        </div>
        <div class="mb-3">
            <label for="tamano1" class="form-label">Tamaño</label>
            <div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="tamano" id="tamano1" value=" Pequeño" <?php echo ' Pequeño' == ($_POST['tamano'] ?? '') ? 'checked' : '' ?>>
                    <label class="form-check-label" for="tamano1">
                        Pequeño
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="tamano" id="tamano2" value="Mediano" <?php echo 'Mediano' == ($_POST['tamano'] ?? '') ? 'checked' : '' ?>>
                    <label class="form-check-label" for="tamano2">
                        Mediano
                    </label>
                </div>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="tamano" id="tamano3" value="Grande" <?php echo 'Grande' == ($_POST['tamano'] ?? '') ? 'checked' : '' ?>>
                <label class="form-check-label" for="tamano3">
                    Grande
                </label>
            </div>
        </div>
            <div class="mb-3">
                <label for="caracteristicas_particulares" class="form-label">Características particulares</label>
                <input type="text" name="caracteristicas_particulares" required class="form-control form-control-sm" id="caracteristicas_particulares" value="<?php echo htmlentities($_POST['caracteristicas_particulares'] ?? '') ?>">
            </div>
            <div class="mb-3">
                <label for="fecha_nacimiento" class="form-label">Fecha de nacimiento</label>
                <input type="date" name="fecha_nacimiento" required class="form-control form-control-sm" id="fecha_nacimiento" value="<?php echo htmlentities($_POST['fecha_nacimiento'] ?? '') ?>">
            </div>
        <div class="mb-3">
            <label for="sexo1" class="form-label">Sexo</label>
            <div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sexo" id="sexo1" value="Hembra" <?php echo 'Hembra' == ($_POST['sexo'] ?? '') ? 'checked' : '' ?>>
                    <label class="form-check-label" for="sexo1">
                        Hembra
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sexo" id="sexo2" value="Macho" <?php echo 'Macho' == ($_POST['sexo'] ?? '') ? 'checked' : '' ?>>
                    <label class="form-check-label" for="sexo2">
                        Macho
                    </label>
                </div>
            </div>
                <!-- ----- -->
            <div class="mb-3">
                <input name='uploadedfile' id="uploadedfile" type='file'value="<?php echo htmlentities($_POST['uploadedfile'] ?? '') ?>"><br>
                <input type='submit' name="subir" value='Subir'></div>

            <!--IMAGEN -->
        <div class="mb-3">
        </div>
    </div>
    <button type="submit" class="btn btn-primary" >Registrar</button>
    </form>
</div>
</div>
</body>
<script src="./js/bootstrap.min.js"></script>
<script src="js/jquery-3.6.0.min.js"></script>
</html>