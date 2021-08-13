<?php
$conexion=mysqli_connect("127.0.0.1", "eq9","12345678","huellitas");
//include ("conexion.php");

    $id = $_GET['id'];    
    
    $eliminar = "delete from servicios_ordenes where id_servorden='$id'";
    
    $resultado =mysqli_query($conexion,$eliminar);

    if ($resultado) {
       header("Location: ver_servicios_ordenes.php");
    } else{
      echo "Ocurrió un error al eliminar. Favor de revisar";
  }



//require_once 'vendor/autoload.php';
//require_once './conexion_formularios.php';

//$sql = 'update servicios_ordenes set subtotal=0 where id_servorden=:id_servicio';
//$sentencia = $conexion->prepare($sql);
//$sentencia->bindValue(':id_servicio', $_POST['id_servicio'], PDO::PARAM_STR);
//echo "<h2><alert>Registro actualizado</alert></h2>";
//$serv = new Servicios();
//$serv->tipo_servicio = $_POST['tipo_servicio'];
//$serv->save();


//$validation =0;
//$validation->setMessages([
  //  'required' => ':attribute es requerido'
    //, 'min' => ':attribute longitud mínima no se cumple'
    //, 'max' => ':attribute longitud máxima no se cumple'
    //, 'in' => ':attribute no está en la lista de valores'
//]);
?>

