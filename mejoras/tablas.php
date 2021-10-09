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
       <nav class="navbar navbar-dark bg-primary">
        <div class="container">
          <a class="navbar-brand" href="index.html">
            <img src="logo.png" alt="" width="135" height="80">
          </a>
        </div>
      </nav>
    <!--Fin del menu-->
    
    
    <h1>Ideas aprobadas</h1>
    
    <div class="boton">
    <form action="selectID.php" method="POST">
        <input type="text" placeholder="ID de la idea para actualizar" name="id" />
        <button class="btn btn-primary" type="submit">Buscar</button>
    </form>
    </div>
    

    <div class="tabla">

    
<?php

include 'conexion.php';
$mostrar = "SELECT id, nombre, folio, area, idea_mejora, areamejora, descripcion_mejora, prioridad, fecha_inicio, fecha_final, responsable, archivo, estatus, implementacion, fecha_implementacion from ideas WHERE estatus = 'APROBADA'";
$resultado = mysqli_query($conexion, $mostrar)
or die("Error al mostrar datos");

echo '<table border="1">';
echo '<tr>';
echo '<th id="nombre">Nombre</th>';
echo '<th id="area">Departamento</th>';
echo '<th id="idea_mejora">Idea de mejora</th>';
echo '<th id="areamejora">Área de la mejora</th>';
echo '<th id="descripcion_mejora">Descripción</th>';

echo '<th id="responsable">Responsable</th>';
echo '<th id="implementacion">Estatus de implementación</th>';
echo '<th id="fecha_implementacion">Fecha implementada</th>';


echo '</tr>';

while ($row = $resultado->fetch_array()) {
    echo '<tr>';
    echo '<td>'.$row['nombre'];
    echo '<td>'.$row['area'];
    echo '<td>'.$row['idea_mejora'];
    echo '<td>'.$row['areamejora'];
    echo '<td>'.$row['descripcion_mejora'];


    echo '<td>'.$row['responsable'];
    echo '<td>'.$row['implementacion'];
    echo '<td>'.$row['fecha_implementacion'];


  }
    mysqli_close($conexion);
    echo '</table>';

?>
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
</html>