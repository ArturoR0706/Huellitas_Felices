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
    <title>Perros registrados</title>
</head>
<body>

<form class="container" action="perros_proceso_actualizar.php" method="POST">

<div class="container">
<table class="table table-success table-striped">
<thead>
    <tr>
   
     
      <th scope="col">Nombre</th>
      <th scope="col">Color</th>
      <th scope="col">Tamaño</th>
      <th scope="col">Características particulares</th>
      <th scope="col">Fecha de nacimiento</th>
      <th scope="col">Sexo</th>
      <th scope="col">Imagen</th>
      <th scope="col">Id_propietario</th>
      <th scope="col">Id_raza</th>
      <th scope="col">Acción</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
     
    </tr>
  </tbody>

</div>

<?php

            $conexion=mysqli_connect("127.0.0.1", "eq9","12345678","huellitas");
            $sql="select * from perros where id_perro='$valor'";
            $result=mysqli_query($conexion,$sql);

while($mostrar=mysqli_fetch_array($result)){
?>
     <tr>
            <input type="hidden" class="table__item" value="<?php echo $mostrar['id_perro']?>" name="id_perro">
            <td> <input type="text" class="table__item" value="<?php echo $mostrar['nombre']?>" name="nombre"> </td>
            <td><input type="text" class="table__item" value="<?php echo $mostrar['color']?>" name="color"></td>
            <td> <input type="text" class="table__item" value="<?php echo $mostrar['tamaño']?>" name="tamaño"> </td>
            <td> <input type="text" class="table__item" value="<?php echo $mostrar['caracteristicas_particulares']?>" name="caracteristicas_particulares"> </td>
            <td> <input type="text" class="table__item" value="<?php echo $mostrar['fecha_nacimiento']?>" name="fecha_nacimiento"> </td>
            <td> <input type="text" class="table__item" value="<?php echo $mostrar['sexo']?>" name="sexo"> </td>
            <td> <input type="text" class="table__item" value="<?php echo $mostrar['imagen']?>" name="imagen"> </td>
            <td> <input type="text" class="table__item" value="<?php echo $mostrar['id_propietario']?>" name="id_propietario"> </td>
            <td> <input type="text" class="table__item" value="<?php echo $mostrar['id_raza']?>" name="id_raza"> </td>
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

