<!DOCTYPE html>
<html lang="en-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <title>Recamaras</title>
</head>
<style>
  body {
      margin: 0;
      padding: 0;
      background: url(perrito_fondo21.jpg) no-repeat center top;
      background-size: cover;
      font-family: sans-serif;
      height: 50vh;
  }
  </style>
<body>

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
     
      <th scope="col">Orden</th>
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
$sql="select * from recamaras_ordenes";
$result=mysqli_query($conexion,$sql);

while($mostrar=mysqli_fetch_array($result)){
?>
     <tr>
            <td><?php echo $mostrar['id_recamorden']?></td>
            <td><?php echo $mostrar['llegada']?></td>
            <td><?php echo $mostrar['salida']?></td>
            <td><?php echo $mostrar['costo']?></td>
            <td><?php echo $mostrar['id_recamara']?></td>
            <td><?php echo $mostrar['id_orden']?></td>
            <td>
            <a href="recamaras_gactualizar.php?id= <?php echo $mostrar['id_recamorden']?>"  clas="table__item__link">Editar</a>||
            <a href="recamaras_eliminar.php?id= <?php echo $mostrar['id_recamorden']?>" class="table__item__link">Eliminar</a>
            </td>  
          </div>
     </tr>
     <?php

}
    ?>

</table>








</body>
<script src="./js/confirmacion_eliminar.js"></script>
<script src="./js/bootstrap.min.js"></script>
</html>