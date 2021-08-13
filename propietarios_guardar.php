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
      background: url(perrito_fondo51.jpg) no-repeat center top;
      background-size: cover;
      font-family: sans-serif;
      height: 50vh;
  }
  </style>
<body>
<div class="container">

        <div class="card-header">
        <i class="bi bi-person-check-fill"></i> <h1 align = center >Un perro podrá morir por ti, pero nunca te mentirá.-George RR Martin</h1>
        <h1 align = center>El propietario ha sido registrado con éxito.</h1>
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
require_once 'vendor/autoload.php';
require_once './conexion_formularios.php';


//$propietario = new Propietarios();
//$propietario->nombre = $_POST['nombre'];
//$propietario->apellido = $_POST['apellido'];
//$propietario->celular = $_POST['celular'];
//$propietario->direccion = $_POST['direccion'];
//$propietario->save();

$sql = 'insert into propietarios (nombre,apellido,telefono,direccion) 
values (:nombre,:apellido,:telefono,:direccion)';
$sentencia = $conexion->prepare($sql);
$sentencia->bindValue(':nombre', $_POST['nombre'], PDO::PARAM_STR);
$sentencia->bindValue(':apellido', $_POST['apellido'], PDO::PARAM_STR);
$sentencia->bindValue(':telefono', $_POST['celular'], PDO::PARAM_STR);
$sentencia->bindValue(':direccion', $_POST['direccion'], PDO::PARAM_STR);
$sentencia->execute();

//$validation = 0;
//$validation->setMessages([
//    'required' => ':attribute es requerido'
//    , 'min' => ':attribute longitud mínima no se cumple'
//    , 'max' => ':attribute longitud máxima no se cumple'
//    , 'in' => ':attribute no está en la lista de valores'
//]);


?>

