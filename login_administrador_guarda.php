<!DOCTYPE html>
<html lang="en-MX">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>Valores Recibidos</title>
</head>
<body>
    <div class='contaier'>
        <div class='row'>
            <div class='col-3'></div>
            <div class='col-6'>
                <div class="card">
                    <div class="card-header">
                        Valores Recibidos
                    </div>
                    <div class="card-body">
                        <?php
                        require_once './conexion_formularios.php';
                        require('vendor/autoload.php');
                        //use Rakit\Validation\Validator;
                        //use Rakit\Validation\Validator;
                        //$validator = new Validator;
                        // $validation = $validator->make($_POST,[
                        //     'nombre' => 'required|min:2|max:50'
                        //     ,'primer_apellido' => 'required|min:2|max:50'
                        //     ,'segundo_apellido' => 'required|min:2|max:50'
                        //     ,'rol' => 'required|in:Administrador,Cliente'
                        // ]);
                        // then validate

                        //$validation->validate();
                        // if ($validation->fails()) 
                        // {
                        //     // handling errors
                        //     $errors = $validation->errors();
                        //     echo "<pre>";
                        //     print_r($errors->firstOfAll());
                        //     echo "</pre>";
                        // } else 
                        // {
                            require_once './conexion_formularios.php';                       
                        $sql = <<<fin
                        insert into usuarios(nombre,primer_apellido,segundo_apellido,contrasena,rol) values(:nombre,:primer_apellido,:segundo_apellido,:contrasena,:rol);

fin;
                        // Sistema de seguridad de encriptación de contraseñas
                        $opciones = [
                            'cost' => 12,
                        ];
                        $contrasena = password_hash($_POST['contrasena'], PASSWORD_BCRYPT, $opciones);
                        $sentencia = $conexion->prepare($sql);
                        $sentencia->bindValue(':nombre', $_POST['nombre'], PDO::PARAM_STR);
                        $sentencia->bindValue(':primer_apellido', $_POST['primer_apellido'], PDO::PARAM_STR);
                        $sentencia->bindValue(':segundo_apellido', $_POST['segundo_apellido'], PDO::PARAM_STR);
                        $sentencia->bindValue(':contrasena', $contrasena, PDO::PARAM_STR);
                        $sentencia->bindValue(':rol', $_POST['rol'], PDO::PARAM_STR);
                        $sentencia->execute();
                        echo "<h2>¡Felicidades</h2>";
                        echo "<h2>Usuario creado</h2>";
                        ?>
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