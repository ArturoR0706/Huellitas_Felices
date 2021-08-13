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

$id_servorden = $_POST['id_servorden']; 
$cantidad = $_POST['cantidad']; 
$subtotal = $_POST['subtotal']; 
$id_orden = $_POST['id_orden'];  
$id_servicios = $_POST['id_servicios'];  




        //Actualización de datoss

$actualizar = "update servicios_ordenes set id_servorden ='$id_servorden',cantidad = '$cantidad',
subtotal = '$subtotal',id_orden= '$id_orden',id_servicios='$id_servicios '
where id_servorden='$id_servorden'";


$result=mysqli_query($conexion,$actualizar);

?>

