<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perros registrados</title>
</head>
<body>
    
<a href="inicio_adm.html"><button type="button">VOLVER</button></a>

</body>
</html>
<?php
$conexion=mysqli_connect("127.0.0.1", "eq9","12345678","huellitas");
//include ("conexion.php");

    $id = $_POST['id_recamorden'];    
    $llegada = $_POST['llegada'];
    $salida = $_POST['salida'];
    $costo = $_POST['costo'];
    $id_recamara = $_POST['id_recamara'];
    $id_orden = $_POST['id_orden'];

        //Actualización de datos

$actualizar = "update recamaras_ordenes set 
llegada ='$llegada',salida = '$salida ',costo = '$costo',
id_recamara = '$id_recamara', id_orden = '$id_orden' where id_recamorden='$id'";


$result=mysqli_query($conexion,$actualizar);

?>
