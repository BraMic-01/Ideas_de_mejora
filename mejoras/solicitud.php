<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calificación Exitosa</title>
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
$solicitud = $_POST['solicitud'];
mysqli_query($conexion, "UPDATE ideas SET estatus = '$solicitud' WHERE id= '$id'") or die ("Error al actualizar");
echo "<b>Calificación exitosa</b>";
?>
    </div>

    

    <div class="boton">
        <form action="aprobar.html">
          <p>Si ha terminado de calificar, cierre la ventana</p>
          <div class="botonAprobar">
            <button class="btn btn-primary" type="submit">Calificar otra idea</button>
          </div>        
        </form>
    </div>


</body>
</html>