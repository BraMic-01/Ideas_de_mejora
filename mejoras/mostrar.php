<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar ideas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="logo.png">

</head>
<body>
       <!--Inicio del menú-->
       <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html"></a>
        <img src="logo.png" alt="" width="135" height="80">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
          <a class="nav-link" href="index.html">Inicio</a>
            <a class="nav-link" href="index.php">Ver grafico actual</a>
          </div>
        </div>
      </div>
    </nav>
    <!--Fin del menu-->
    
    
    
    

    <div class="boton">
    <form action="selectFolio.php" method="POST">
        <input type="text" placeholder="Folio de la persona" name="folio" />
        <button class="btn btn-primary" type="submit">Buscar</button>
    </form>
</div>

    <div class="tabla">

    
<?php

include 'conexion.php';
$mostrar = "SELECT * from ideas";
$resultado = mysqli_query($conexion, $mostrar)
or die("Error al mostrar datos");

echo '<table border="1">';
echo '<tr>';
echo '<th id="nombre">Nombre</th>';
echo '<th id="folio">Folio</th>';
echo '<th id="area">Departamento</th>';
echo '<th id="idea_mejora">Idea</th>';
echo '<th id="areamejora">Área de la mejora</th>';
echo '<th id="descripcion_mejora">Descripción</th>';
echo '<th id="prioridad">Prioridad</th>';
echo '<th id="fecha_inicio">Fecha inicio</th>';

echo '<th id="responsable">Responsable</th>';

echo '<th id="estatus">Estatus</th>';
echo '</tr>';

while ($row = $resultado->fetch_array()) {
    echo '<tr>';
    echo '<td>'.$row['nombre'];
    echo '<td>'.$row['folio'];
    echo '<td>'.$row['area'];
    echo '<td>'.$row['idea_mejora'];
    echo '<td>'.$row['areamejora'];
    echo '<td>'.$row['descripcion_mejora'];
    echo '<td>'.$row['prioridad'];
    echo '<td>'.$row['fecha_inicio'];

    echo '<td>'.$row['responsable'];

    echo '<td>'.$row['estatus'];
  }
    mysqli_close($conexion);
    echo '</table>';

?>
</div>

<div class="boton">
    <form action="selectID.php" method="POST">
        <input type="text" placeholder="Ingresa la ID de la idea" name="id" />
        <button class="btn btn-primary" type="submit">Buscar</button>
    </form>
</div>

<script type="text/javascript">
       const bdark = document.querySelector('#bdark');
        const body = document.querySelector('body');

        load();
        bdark.addEventListener('click', e =>{
            body.classList.toggle('darkmode');
            store(body.classList.contains('darkmode'));
        });

        function load(){
            const darkmode = localStorage.getItem('darkmode');

            if(!darkmode){
                store ('true');
            }else if(darkmode == 'true'){
                body.classList.add('darkmode');
            }
        }

        function store(value){
            localStorage.setItem('darkmode', value);
        }
</script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</html>