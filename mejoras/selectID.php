<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idea de Mejora</title>
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

    
<div class="buscarPersona">

<?php
if(isset($_POST['Buscar']));
include("conexion.php");

$id = $_POST['id'];
$resultados = mysqli_query($conexion, "SELECT * FROM ideas WHERE id = '$id'");
    while($consulta = mysqli_fetch_array($resultados))
    {

        echo "<b>Idea: </b>".$consulta['idea_mejora'];
        echo '<br>';
        echo "<b>ID: </b>".$consulta['id'];
        echo '<br>';
        echo "<b>Nombre: </b>".$consulta['nombre'];
        echo '<br>';
        echo "<b>Folio: </b>".$consulta['folio'];
        echo '<br>';
        echo "<b>Área: </b>".$consulta['area'];
        echo '<br>';
        echo "<b>Área de mejora: </b>".$consulta['areamejora'];
        echo '<br>';
        echo "<b>Descripción: </b>".$consulta['descripcion_mejora'];
        echo '<br>';
        echo "<b>Responsable: </b>".$consulta['responsable'];
        echo '<br>';
        echo "<b>Fecha inicial: </b>".$consulta['fecha_inicio'];
        echo '<br>';
        echo "<b>Fecha Final: </b>".$consulta['fecha_final'];
        echo '<br>';
        echo "<b>Archivo: </b>".$consulta['archivo'];
        echo '<br>';
        echo "<b>Estatus: </b>".$consulta['estatus'];
        echo '<br>';
        echo "<b>Estatus de implementación: </b>".$consulta['implementacion'];
        echo '<br>';
        echo "<b>Fecha de implementación: </b>".$consulta['fecha_implementacion'];
        echo '<br>';
    }

?>

    <div class="botonesIndex">
      <form action="actualizarImple.html">
      <button type="submit" onclick="return ConfirmSubmit()" class="btn btn-lg btn-primary">Actualizar</button>
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
</html>