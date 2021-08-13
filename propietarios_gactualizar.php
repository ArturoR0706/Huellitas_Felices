<?php

//include ("conexion.php");
$conexion=mysqli_connect("127.0.0.1", "eq9","12345678","huellitas");
//require_once 'vendor/autoload.php';
//require_once './conexion_formularios.php';

$valor = $_GET["id"];
//$propietario = "select * from propietarios where id_propietario='$valor'";


//Aquí es el primer código
//$sql = 'update propietarios 
 //       set nombre=:nombre,apellido=:apellido,telefono=:celular,direccion=:direccion 
   //     where id_propietario=:id_propietario';

//$sentencia = $conexion->prepare($sql);
//$sentencia->bindValue(':id_propietario', $_POST['id_propietario'], PDO::PARAM_STR);
//$sentencia->bindValue(':nombre', $_POST['nombre'], PDO::PARAM_STR);
//$sentencia->bindValue(':apellido', $_POST['apellido'], PDO::PARAM_STR);
//$sentencia->bindValue(':celular', $_POST['celular'], PDO::PARAM_STR);
//$sentencia->bindValue(':direccion', $_POST['direccion'], PDO::PARAM_STR);
//$sentencia->execute();

//echo "<h2><alert>Propietario ha sido cambiado</alert></h2>";


//$validation = 0;
//$validation->setMessages([
//    'required' => ':attribute es requerido'
//    , 'min' => ':attribute longitud mínima no se cumple'
//    , 'max' => ':attribute longitud máxima no se cumple'
//    , 'in' => ':attribute no está en la lista de valores'
//]);



?>

<!DOCTYPE html>
<html lang="en-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <title>Propietarios registrados</title>
</head>
<body>

<form class="container" action="propietarios_proceso_actualizar.php" method="POST">

<div class="container">
<table class="table table-success table-striped">
<thead>
    <tr>
   
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Teléfono</th>
      <th scope="col">Dirección</th>
      <th scope="col">Operación</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
     
    </tr>
  </tbody>

</div>

<?php

$conexion=mysqli_connect("127.0.0.1", "eq9","12345678","huellitas");
$sql="select * from propietarios where id_propietario='$valor'";
$result=mysqli_query($conexion,$sql);

while($mostrar=mysqli_fetch_array($result)){
?>
     <tr>
            <input type="hidden" class="table__item" value="<?php echo $mostrar['id_propietario']?>" name="id">
            <td> <input type="text" class="table__item" value="<?php echo $mostrar['nombre']?>" name="nombre"> </td>
            <td><input type="text" class="table__item" value="<?php echo $mostrar['apellido']?>" name="apellido"></td>
            <td> <input type="text" class="table__item" value="<?php echo $mostrar['telefono']?>" name="telefono"> </td>
            <td> <input type="text" class="table__item" value="<?php echo $mostrar['direccion']?>" name="direccion"> </td>
            <td>
            <div class="col-12">
                 <button type="submit" class="btn btn-primary">Actualizar</button>
                 </div>
            </td>    
        </div>
            </td>
            </tr>
       
     <?php
}
    ?>
    
</table>

</body>
<script src="./js/bootstrap.min.js"></script>
</html>

