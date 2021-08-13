<!DOCTYPE html>
<html lang="en-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <title>Propietarios registrados</title>
</head>
<style>
  body {
      margin: 0;
      padding: 0;
      background: url(perrito_fondo51.jpg) no-repeat center top;
      background-size: cover;
      font-family: sans-serif;
      height: 50vh;
  }
  </style>
<body>

<div class="container">
<div class="container">
        <div class="navbar navbar-dark bg-dark" >
            <ul class="nav justify-content-center" .justify-content-end:>  
                <li class="nav-item">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Propietarios
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="propietarios_crear.php">Crear</a></li>
                        <li><a class="dropdown-item" href="ver_propietarios.php">Ver propietarios</a></li>
                        
                        </ul>
                      </li>
                      <li class="nav-item">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Perros
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <li><a class="dropdown-item" href="formulario_perro.php">Crear</a></li>
                            <li><a class="dropdown-item" href="ver_perros.php">Ver perros</a></li>
                            
                            </ul>
                          </li>
                        
                      <li class="nav-item">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Servicios
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <li><a class="dropdown-item" href="servicios_crear.php">Añadir servicio</a></li>
                              <li><a class="dropdown-item" href="ver_servicios_ordenes.php">Ver servicios</a></li>
                              
                        </ul>
                          </li>

                          <li class="nav-item">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Recamaras
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <li><a class="dropdown-item" href="ver_recamaras.php">Ver Recamaras</a></li>
                               
                                 
                            </ul>
                              </li>
                    </li>
                <li class="nav-item">
                  <a class="nav-link" href="consulta_factura.php">Facturación</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="login.php">Salir</a>
                </li>
              </div>
<table class="table table-success table-striped">
<thead>
    <tr>
      <th scope="col">Id_perro</th>
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
$sql="select * from perros";
$result=mysqli_query($conexion,$sql);

while($mostrar=mysqli_fetch_array($result)){
?>
     <tr>
            <td><?php echo $mostrar['id_perro']?></td>
            <td><?php echo $mostrar['nombre']?></td>
            <td><?php echo $mostrar['color']?></td>
            <td><?php echo $mostrar['tamaño']?></td>
            <td><?php echo $mostrar['caracteristicas_particulares']?></td>
            <td><?php echo $mostrar['fecha_nacimiento']?></td>
            <td><?php echo $mostrar['sexo']?></td>
            <td><?php echo $mostrar['imagen']?></td>
            <td><?php echo $mostrar['id_propietario']?></td>
            <td><?php echo $mostrar['id_raza']?></td>
            <td>
            <a href="perros_gactualizar.php?id= <?php echo $mostrar['id_perro']?>"  clas=table__item__link">Editar</a>||
            <a href="perros_eliminar.php?id= <?php echo $mostrar['id_perro']?>"  class="table__item__link">Eliminar</a>|
            </div>
            </td>
     </tr>
     <?php

}
    ?>

</table>

</body>
<script src="./js/bootstrap.min.js"></script>
<script src="./js/confirmacion_eliminar.js"></script>
</html>