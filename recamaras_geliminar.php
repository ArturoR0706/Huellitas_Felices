<?php
require_once 'vendor/autoload.php';
require_once './conexion_formularios.php';

$sql = 'delete from recamaras,recamaras_orden,ordenes,servicios_ordenes
servicios_adicionales where id_recamara=:id_recamara';

$sentencia = $conexion->prepare($sql);
$sentencia->bindValue(':id_recamara', $_POST['id_recamara'], PDO::PARAM_STR);
$sentencia->execute();

//$validation->setMessages([
//  'required' => ':atribute es requerido'
//  , 'min' => ':attribute longitud mínima no se cumple'
//  , 'max' => ':attribute longitud máxima no se cumple'
//  , 'in' => ':attribute no está en la lista de valores'
//]);



//if (PDO($conexion, $sql)) {
  //  echo "Ha sido actualizado correctamente";
//} else {
 //   echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
//}
//mysqli_close($conexion);
//

?>