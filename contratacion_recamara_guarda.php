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
        <i class="bi bi-check-circle-fill"></i> <h1 align = center >Contratación exitosa</h1>
        
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
require_once ('./conexion_formularios.php');
require_once('./vendor/autoload.php');




$sql = 'insert into recamaras_ordenes(llegada,salida,costo,id_recamara,id_orden) 
                        values (:llegada,:salida,:costo,:id_recamara,:id_orden)';

$sentencia = $conexion->prepare($sql);
$sentencia->bindValue(':llegada', $_POST['llegada'], PDO::PARAM_STR);
$sentencia->bindValue(':salida', $_POST['salida'], PDO::PARAM_STR);
$sentencia->bindValue(':costo', $_POST['costo'], PDO::PARAM_STR);
$sentencia->bindValue(':id_recamara', $_POST['id_recamara'], PDO::PARAM_STR);
$sentencia->bindValue(':id_orden', $_POST['id_orden'], PDO::PARAM_STR);
$sentencia->execute();
?>