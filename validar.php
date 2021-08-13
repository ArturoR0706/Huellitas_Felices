<?php
//nclude('conexion.php');
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;


include('conexion.php');

$consulta="select * from usuarios where nombre='$usuario' and contrasena='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:inicio_adm.html");

}else{
    ?>
    <?php
    include("login.php");

  ?>
  <h1 class="bad">Usuario o contraseña incorrecto. Favor de rectificar</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);