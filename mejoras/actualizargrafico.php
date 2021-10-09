<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualización del gráfico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!--Inicio del menú-->
    <nav class="navbar navbar-dark bg-primary">
        <div class="container">
          <a class="navbar-brand" href="index.html">
            <img src="logo.png" alt="" width="135" height="80">
          </a>
        </div>
      </nav>
    <!--Fin del menu-->

    <div class="calificacion">
            <?php
            include 'conexion.php';
            include 'conexiongrafica.php';
            $total_ideas = $_POST["total_ideas"];
            $mes = $_POST["mes"];

            $insertar = "INSERT into totalideas(total_ideas, mes)
            values('$total_ideas','$mes')";

            $resultado = mysqli_query($conexion, $insertar)
            or die("Error al hacer la gráfica");
            mysqli_close($conexion);

            echo "<b>Ideas totales: </b>" . $total_ideas . "<br/>";
            echo "<b>Mes: </b>" . $mes . "<br/>";
            ?>
    </div>

    <div class="boton">
  <form action="index.php">
    <button class="btn btn-primary" type="submit">Revisar gráficos</button>
  </form>



</body>
</html>

