<!DOCTYPE html>
<html lang="en-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>Valores Recibidos</title>
</head>
<body>
    <div class='contaier'>
        <div class='row'>
            <div class='col-3'></div>
            <div class='col-6'>
                <div class="card">
                    <div class="card-header">
                        Valores Recibidos
                    </div>
                    <div class="card-body">
                        <?php
                         require_once ('./conexion_formularios.php');
                         require('vendor/autoload.php');
                        //use Rakit\Validation\Validator;
                        //use Rakit\Validation\Validator;
                        //$validator = new Validator;
                        // $validation = $validator->make($_POST,[
                        //     'nombre' => 'required|min:2|max:50'
                        //     ,'primer_apellido' => 'required|min:2|max:50'
                        //     ,'segundo_apellido' => 'required|min:2|max:50'
                        //     ,'rol' => 'required|in:Administrador,Cliente'
                        // ]);
                        // then validate

                        //$validation->validate();
                        // if ($validation->fails()) 
                        // {
                        //     // handling errors
                        //     $errors = $validation->errors();
                        //     echo "<pre>";
                        //     print_r($errors->firstOfAll());
                        //     echo "</pre>";
                        // } else 
                        // {
                        require_once('./vendor/autoload.php');

                        $sql = <<<fin
                        
                        
                        'insert into recamaras_ordenes (llegada,salida,costo) values (:llegada,:salida,:costo)';
fin;
                        // Encriptamos la contraseña
                        //$opciones = [
                          //  'cost' => 12,
                        //];
                        $sentencia = $conexion->prepare($sql);
                        $sentencia->bindValue(':n_recamara', $_POST['n_recamara'], PDO::PARAM_STR);
                        $sentencia->bindValue(':piso', $_POST['piso'], PDO::PARAM_STR);
                        $sentencia->bindValue(':estatus', $_POST['estatus'], PDO::PARAM_STR);
                        $sentencia->bindValue(':llegada', $_POST['llegada'], PDO::PARAM_STR);
                        $sentencia->bindValue(':salida', $_POST['salida'], PDO::PARAM_STR);
                        $sentencia->bindValue(':costo', $_POST['costo'], PDO::PARAM_STR);
                        $sentencia->execute();
                        echo "<h2>¡Felicidades</h2>";
                        echo "<h2>Usuario creado</h2>";
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
    <script src="../js/bootstrap.min.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
</body>
</html>







<?php
require_once 'vendor/autoload.php';
require_once './conexion_formularios.php';


$sql = 'insert into recamaras (n_recamara,n_piso,estatus_recamara) values (:recamara,:piso,:estatus)';
$sql = 'insert into recamaras_ordenes (llegada,salida,costo) values (:llegada,:salida,:costo)';
$sentencia = $conexion->prepare($sql);
$sentencia->bindValue(':n_recamara', $_POST['n_recamara'], PDO::PARAM_STR);
$sentencia->bindValue(':n_piso', $_POST['piso'], PDO::PARAM_STR);
$sentencia->bindValue(':estatus', $_POST['estatus'], PDO::PARAM_STR);
$sentencia->bindValue(':llegada', $_POST['llegada'], PDO::PARAM_STR);
$sentencia->bindValue(':salida', $_POST['salida'], PDO::PARAM_STR);
$sentencia->bindValue(':costo', $_POST['costo'], PDO::PARAM_STR);
$sentencia->execute();
var_dump($sql);

echo "<h2><alert>Registro creado</alert></h2>";

//$validation =0;
//$validation->setMessages([
//    'required' => ':atribute es requerido'
//    , 'min' => ':attribute longitud mínima no se cumple'
//    , 'max' => ':attribute longitud máxima no se cumple'
//    , 'in' => ':attribute no está en la lista de valores'
//]);


