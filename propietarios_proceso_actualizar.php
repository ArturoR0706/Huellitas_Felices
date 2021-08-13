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

    $id = $_POST['id'];    
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];

        //Actualización de datos

$actualizar = "update propietarios set nombre ='$nombre',apellido = '$apellido',telefono = '$telefono',direccion = '$direccion'where id_propietario='$id'";


$result=mysqli_query($conexion,$actualizar);

?>

