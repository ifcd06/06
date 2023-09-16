<?php 
include ".htacces";
if (isset( $_REQUEST["submit"])){
$nombre=  $_REQUEST["nombre" ];
$apellido =  $_REQUEST["apellido" ];
$mail=  $_REQUEST["mail" ];
$genero =  $_REQUEST["genero" ];
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

$sql = "INSERT INTO `crud`(`nombre`, `apellido`, `correo`, `genero`) VALUES ('$nombre','$apellido','$mail','$genero')";
$result = mysqli_query($enlace, $sql);

    if ($result){
        header("location:index.php?msg=Nuevo usuario dado de alta.");
    }
    else{
        echo "ha fallado algo ".mysqli_errno($enlace);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/b2dfebde79.js" crossorigin="anonymous"></script>
    
</head>
<body >
<div class="container-fluid col-11 mb-3 mt-3" style="background-color: #669933;" >
<nav class="navbar navar-light justify-content-center" > <h1>Aplicacion PHP, Mysql y bootstrap.</h1>
</nav>
</div>
<div class="container">
    <div class="text-center mb-4">
        <h3> añadir usuario</h3>
        <p class="tex-muted">Completa el formulario a continuación.</p>
    </div>
</div>
<div class="container d-flex justify-content-center">
    <form action="" style="width: 50vw; min-width: 300px" >
    <div class="row">
        <div class="col">
            <label for="nombre" class="form-label" >
            Nombre:
            </label>
            <input type="text" class="form-control" name="nombre" placeholder="Introduce el nombre" required>
        </div>
        <div class="col">
            <label for="apellido" class="form-label" >
            Apellido:
            </label>
            <input type="text" class="form-control" name="apellido" placeholder="Introduce el apellido" required>
        </div>
    </div>
        <div class="mb-3">
            <label for="mail" class="form-label" >
            Correo:
            </label>
            <input type="mail" class="form-control" name="mail" placeholder="Introduce el correo" required>
        </div>
<div class="form-group mb-3">
    <label>Genero</label><br>
    <input type="radio" class="form-check-input" name="genero" id="masculino" value="masculino" required>
    <label for="masculino" class="form-input-label">Masculino</label>

    <input type="radio" class="form-check-input " name="genero" id="femenino" value="femenino" required>
    <label for="femenino" class="form-input-label">Femenino</label>
</div>
<div>
    <button type="submit" class="btn btn-success" name="submit">insertar</button>
    <a href="index.php" class="btn btn-danger">cancel</a>
</div>
    </form>
    
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>   
</body>
</html>