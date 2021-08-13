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

<form class="container" action="recamaras_proceso_actualizar.php" method="POST">

<div class="container">
<table class="table table-success table-striped">
<thead>
    <tr>
   
    
      <th scope="col">Llegada</th>
      <th scope="col">Salida</th>  
      <th scope="col">Costo</th> 
      <th scope="col">No. recamara</th> 
      <th scope="col">No. orden</th> 
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
$sql="select * from recamaras_ordenes where id_recamorden='$valor'";
$result=mysqli_query($conexion,$sql);

while($mostrar=mysqli_fetch_array($result)){
?>
     <tr>
            <input type="hidden" class="table__item" value="<?php echo $mostrar['id_recamorden']?>" name="id_recamorden">
            <td> <input type="text" class="table__item" value="<?php echo $mostrar['llegada']?>" name="llegada"> </td>
            <td><input type="text" class="table__item" value="<?php echo $mostrar['salida']?>" name="salida"></td>
            <td> <input type="text" class="table__item" value="<?php echo $mostrar['costo']?>" name="costo"> </td>
            <td> <input type="text" class="table__item" value="<?php echo $mostrar['id_recamara']?>" name="id_recamara"> </td>
            <td> <input type="text" class="table__item" value="<?php echo $mostrar['id_orden']?>" name="id_orden"> </td>
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

