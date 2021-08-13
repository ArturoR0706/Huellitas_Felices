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

$id = $_POST['id_perro'];  
$nombre = $_POST['nombre'];
$color = $_POST['color'];
$tamaño = $_POST['tamaño'];
$caracteristicas_particulares = $_POST['caracteristicas_particulares'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$sexo = $_POST['sexo'];



        //Actualización de datoss

$actualizar = "update perros set nombre ='$nombre',color = '$color',
tamaño = '$tamaño',caracteristicas_particulares = '$caracteristicas_particulares',
fecha_nacimiento = '$fecha_nacimiento',sexo = '$sexo' where id_perro='$id'";


$result=mysqli_query($conexion,$actualizar);

?>