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
        <i class="bi bi-plus-circle-fill"></i> <h1 align = center >"Te darás cuenta de que lo que hoy parece un sacrificio, mañana terminará siendo el mayor logro de tu vida."</h1>
        <h1 align = center>Este servicio ha sido creado con éxito</h1>
        <h3 align = center >Favor de dar click en el siguiente botón.</h3>
     
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

$sql = 'insert into servicios_adicionales (tipo_servicio,nombre_servicio,costo) values (:tipo_servicio,:nombre_servicio,:costo)';

$sentencia = $conexion->prepare($sql);
$sentencia->bindValue(':tipo_servicio', $_POST['tipo_servicio'], PDO::PARAM_STR);
$sentencia->bindValue(':nombre_servicio', $_POST['nombre_servicio'], PDO::PARAM_STR);
$sentencia->bindValue(':costo', $_POST['costo'], PDO::PARAM_STR);
$sentencia->execute();


//$serv = new Servicios();
//$serv->tipo_servicio = $_POST['tipo_servicio'];
//$serv->nombre_servicio = $_POST['nombre_servicio'];
//$serv->costo = $_POST['costo'];
//$serv->save();
//$validation = 0;
//$validation->setMessages([
//  'required' => ':attribute es requerido'
//  , 'min' => ':attribute longitud mínima no se cumple'
//  , 'max' => ':attribute longitud máxima no se cumple'
//  , 'in' => ':attribute no está en la lista de valores'
//]);



