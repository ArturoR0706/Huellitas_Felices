<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>Perros registrados</title>
</head>
<style>
    body {
        margin: 0;
        padding: 0;
        background: url(fondo1.1.jpg) no-repeat center top;
        background-size: cover;
        font-family: sans-serif;
        height: 50vh;
    }
</style>
<body>
<div class="container">

        <div class="card-header">
        <i class="bi bi-person-check-fill"></i> <h1 align = center >"Mi perro no es solo mi mascota, es mi familia..."</h1>
        <h1 align = center>El perro ha sido registrado con éxito.</h1>
        <h3 align = center >Favor de dar click en el siguiente botón.</h3>
        <h3 align = center>¡Gracias por tu preferencia!</h3>    
    </div>
   
    <a href="inicio_adm.html"><button type="button">Regresar a la página inicio</button></a>
    </div>
</div>
   
</body>
<script src="js/bootstrap.min.js"></script>

</html>

<?php
require_once('./conexion_formularios.php');
require_once('./vendor/autoload.php');
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
$sql = 'insert into perros(nombre,color,tamaño,caracteristicas_particulares,fecha_nacimiento,sexo) 
                        values (:nombre,:color,:tamano,:caracteristicas_particulares,:fecha_nacimiento,:sexo)';
// Encriptamos la contraseña
//$opciones = [
//  'cost' => 12,
//];
$sentencia = $conexion->prepare($sql);
$sentencia->bindValue(':nombre', $_POST['nombre'], PDO::PARAM_STR);
$sentencia->bindValue(':color', $_POST['color'], PDO::PARAM_STR);
$sentencia->bindValue(':tamano', $_POST['tamano'], PDO::PARAM_STR);
$sentencia->bindValue(':caracteristicas_particulares', $_POST['caracteristicas_particulares'], PDO::PARAM_STR);
$sentencia->bindValue(':fecha_nacimiento', $_POST['fecha_nacimiento'], PDO::PARAM_STR);
$sentencia->bindValue(':sexo', $_POST['sexo'], PDO::PARAM_STR);
$sentencia->execute();
$uploadedfile = $_FILES['uploadedfile']['name'];
$ruta = $_FILES['uploadedfile']['tmp_name'];
$destino = 'uploads/' . $uploadedfile;
copy($ruta, $destino);

?>