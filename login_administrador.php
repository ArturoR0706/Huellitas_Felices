<!DOCTYPE html>
<html lang="en-MX">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>Formulario de registro de Administradores</title>
</head>
<body>
    <!DOCTYPE html>
    <html lang="es-MX">
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <i class="bi-person-circle"></i>
                    </div>
                    <div class="card-body">
                    <form action='login_administrador_guarda.php' method='POST'>
                        <h3>Alta de Administradores y Usuarios</h3>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" name="nombre" required class="form-control form-control-sm" id="nombre" value="<?php echo htmlentities($_POST['nombre'] ?? '') ?>">
                        </div>

                        <div class="mb-3">
                            <label for="primer_apellido" class="form-label">Primer apellido</label>
                            <input type="text" name="primer_apellido" required class="form-control form-control-sm" id="color" value="<?php echo htmlentities($_POST['primer_apellido'] ?? '') ?>">
                        </div>

                        <div class="mb-3">
                            <label for="segundo_apellido" class="form-label">Segundo apellido</label>
                            <input type="text" name="segundo_apellido" required class="form-control form-control-sm" id="segundo_apellido" value="<?php echo htmlentities($_POST['segundo_apellido'] ?? '') ?>">
                        </div>

                        <div class="mb-3">
                            <label for="contrasena" class="form-label">Contraseña</label>
                            <input type="password" name='contrasena' required class="form-control" id="contrasena" aria-describedby="contrasenaHelp">

                        </div>
                        <div class="mb-3">
                            <label for="confirmar_contrasena" class="form-label">Confrimar Contraseña</label>
                            <input type="password" name='confirmar_contrasena' required class="form-control" id="confirmar_contrasena" aria-describedby="confirmar_contrasenaHelp">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="rol1" class="form-label">Rol</label>
                    <div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="rol" id="rol1" value="Administrador" <?php echo 'Administrador' == ($_POST['rol'] ?? '') ? 'checked' : '' ?>>
                            <label class="form-check-label" for="rol1">
                                Administrador
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="rol" id="rol2" value="Inactiva" <?php echo 'Usuario' == ($_POST['rol'] ?? '') ? 'checked' : '' ?>>
                            <label class="form-check-label" for="rol2">
                                Usuario
                            </label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Registrar</button>
                </form>
</body>
<script src="./js/bootstrap.min.js"></script>
<script src="js/jquery-3.6.0.min.js"></script>

</html>


</body>
</html>