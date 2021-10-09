<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualización Exitosa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!--Inicio del menú-->
    <nav class="navbar navbar-dark bg-primary">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="logo.png" alt="" width="135" height="80">
          </a>
        </div>
      </nav>
    <!--Fin del menu-->

    <div class="calificacion">
<?php
include 'conexion.php';
$id = $_POST['id'];
$implementacion = $_POST['implementacion'];
$fecha_implementacion = $_POST['fecha_implementacion'];
mysqli_query($conexion, "UPDATE ideas SET implementacion = '$implementacion' WHERE id= '$id'") or die ("Error al actualizar");
mysqli_query($conexion, "UPDATE ideas SET fecha_implementacion = '$fecha_implementacion' WHERE id= '$id'") or die ("Error al actualizar");
echo "<b>Actualización exitosa</b>";
?>
    </div>

    

    <div class="boton">
        <form action="actualizarImple.html">
          <p>Si ha terminado de actualizar, cierre la ventana</p>
          <div class="botonAprobar">
            <button class="btn btn-primary" type="submit">Actualizar otra idea</button>
          </div>        
        </form>
    </div>


</body>
</html>