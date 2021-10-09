<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idea registrada</title>
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

    <div class="ideaRegistrada">

    <?php
    include 'conexion.php';
    $nombre = $_POST["nombre"];
    $area = $_POST["area"];
    $folio = $_POST["folio"];
    $idea_mejora = $_POST["idea_mejora"];
    $areamejora = $_POST["areamejora"];
    $descripcion_mejora = $_POST["descripcion_mejora"];
    $prioridad = $_POST["prioridad"];
    $fecha_inicio = $_POST["fecha_inicio"];
    $fecha_final = $_POST["fecha_final"];
    $responsable = $_POST["responsable"];
    $archivo = $_POST["archivo"];

    $estatus = $_POST["estatus"];
    $implementacion = $_POST["implementacion"];
    $fecha_implementacion = $_POST["fecha_implementacion"];

    $insertar = "INSERT into ideas (nombre, area, folio, idea_mejora, areamejora, descripcion_mejora, prioridad, fecha_inicio, fecha_final, responsable, archivo, estatus, implementacion, fecha_implementacion)
    values('$nombre', '$area', '$folio', '$idea_mejora', '$areamejora','$descripcion_mejora','$prioridad','$fecha_inicio','$fecha_final','$responsable', '$archivo', '$estatus', '$implementacion', '$fecha_implementacion')";

    $resultado = mysqli_query($conexion, $insertar)
    or die("Error al guardar datos");
    mysqli_close($conexion);

    echo "<b>Tu información ha sido guardada</br>";
    /*echo "<b>Nombre: </b>" . $nombre . "<br/>";
    echo "<b>Folio: </b>" . $folio . "<br/>";
    echo "<b>Área: </b>" . $area . "<br/>";
    echo "<b>Idea de mejora: </b>" . $idea_mejora . "<br/>";
    echo "<b>Área de mejora: </b>" . $areamejora . "<br/>";
    echo "<b>Descripción de la idea: </b>" . $descripcion_mejora . "<br/>";
    echo "<b>Prioridad: </b>" . $prioridad . "<br/>";
    echo "<b>Mes inicial: </b>" . $fecha_inicio . "<br/>";
    echo "<b>Fecha final: </b>" . $fecha_final . "<br/>";
    echo "<b>Responsable: </b>" . $responsable . "<br/>";
    echo "<b>Archivo: </b>" .$archivo . "</br>";
    echo "<b>Estatus: </b>" . $estatus . "<br/>";
    echo "<b>------------------------- TU INFORMACIÓN HA SIDO REGISTRADA ------------------------- </b>";*/


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