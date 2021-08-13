<?php

//include ("conexion.php");
$conexion = mysqli_connect("127.0.0.1", "eq9", "12345678", "huellitas");
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

    <form class="container" action="servicios_ordenes_proceso_actualizar.php" method="POST">

        <div class="container">
            <table class="table table-success table-striped">
                <thead>
                    <tr>
             
                        <th scope="col">cantidad</th>
                        <th scope="col">subtotal</th>
                        <th scope="col">id_orden</th>
                        <th scope="col">id_servicios</th>
                        <th scope="col">Acción</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>

                    </tr>
                </tbody>

        </div>

        <?php

        $conexion = mysqli_connect("127.0.0.1", "eq9", "12345678", "huellitas");
        $sql = "select*from servicios_ordenes where id_servorden='$valor'";
        $result = mysqli_query($conexion, $sql);

        while ($mostrar = mysqli_fetch_array($result)) {
        ?>
            <tr>
                <input type="hidden" class="table__item" value="<?php echo $mostrar['id_servorden'] ?>" name="id_servorden">
                <td> <input type="text" class="table__item" value="<?php echo $mostrar['cantidad'] ?>" name="cantidad"></td>
                <td> <input type="text" class="table__item" value="<?php echo $mostrar['subtotal'] ?>" name="subtotal"></td>
                <td> <input type="text" class="table__item" value="<?php echo $mostrar['id_orden'] ?>" name="id_orden"></td>
                <td> <input type="text" class="table__item" value="<?php echo $mostrar['id_servicios'] ?>" name="id_servicios"></td>
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