
<?php
$conexion=mysqli_connect("127.0.0.1", "eq9","12345678","huellitas");
//include ("conexion.php");

    $id = $_GET['id'];    
    
    $eliminar = "delete from propietarios where id_propietario='$id'";
    
    $resultado =mysqli_query($conexion,$eliminar);

    if ($resultado) {
       header("Location: ver_propietarios.php");
    } else{
      echo "Ocurrió un error al eliminar. Favor de revisar";
  }


//require_once 'vendor/autoload.php';
//require_once './conexion_formularios.php';
//$sql = 'delete from propietarios where id_propietario=:id_propietario';
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
  //  'required' => ':attribute es requerido'
    //, 'min' => ':attribute longitud mínima no se cumple'
    //, 'max' => ':attribute longitud máxima no se cumple'
    //, 'in' => ':attribute no está en la lista de valores'
//]);


?>

