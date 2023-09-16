<?php 
include ".htacces";
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bootstrap</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/b2dfebde79.js" crossorigin="anonymous"></script>
 </head>
 <body >
<div class="container-fluid col-11 mb-3 mt-3" style="background-color: #669933;" >
<nav class="navbar navar-light justify-content-center" > <h1>Aplicacion PHP, Mysql y bootstrap.</h1>
</nav>
</div>
<div class="container">
    <a href="insert.php" class="btn btn-dark mb-3">Añadir registro</a>
</div>
<div class="container";>
    <?php 
    if (isset ($_REQUEST["msg" ])){
        $msg = $_REQUEST["msg" ];
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert"><h3>'.$msg.'</h3>';
        echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';

    } 
    ?>

    </div>   
</div>
<div class="container";>
<table class="table table-hover table-center">
  <thead class="table-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">E-mail</th>
      <th scope="col" style="text-align: center ;">Genero</th>
      <th scope="col" style="text-align: center ;">Acciones</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <?php 
    $enlace = mysqli_connect("$host", "$user", "$password", "$base", "$db_port");
    if (mysqli_connect_errno($enlace)==0)
    {
       // print "Conexión exitosa!!";
        
    }
    
    else
    
    {
        print "Error de conexión Nº: ";
        printf("[%d] %s\n", mysqli_connect_errno($enlace), mysqli_connect_error($enlace));
        
    }
    $sql = "select * from crud";
    $result = mysqli_query($enlace, $sql);
    while($row = mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <th><?php echo $row['id'] ?></th>
            <th><?php echo $row['nombre'] ?></th>
            <th><?php echo $row['apellido'] ?></th>
            <th><?php echo $row['correo'] ?></th>
            <th style="text-align: center ;"><?php echo $row['genero'] ?></th>
            <th style="text-align: center ;">
               <a href="actualizar.php?id=<?php echo $row['id'] ?>"  class="link-dark"><i class="fa-solid fa-pen-to-square"></i></a>
               <a href="eliminar.php?id=<?php echo $row['id'] ?>"  class="link-dark"><i class="fa-solid fa-trash"></i></a>
            </th>
        </tr>

        
    <?php }  ?>
    
 <?php  ?>
   
    
  </tbody>
</table> 
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>   

 </body>
 </html>