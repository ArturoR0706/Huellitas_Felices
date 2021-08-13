<?php

$conexion=mysqli_connect("127.0.0.1", "eq9","12345678","huellitas");
//include ("conexion.php");

    $id = $_GET['id'];    
    
    $eliminar = "delete from perros where id_perro='$id'";
    
    $resultado =mysqli_query($conexion,$eliminar);

    if ($resultado) {
       header("Location: ver_perros.php");
    } else{
      echo "Ocurrió un error al eliminar. Favor de revisar";
  }

?>