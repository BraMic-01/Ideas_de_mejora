<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="https;//cdnjs.cloudflare.com/ajax/libs/Charts.js/2.9.3/Chart.min.css">
    <link rel="stylesheet" href="style.css">

    <title>Grafico</title>
  </head>
  <body>
      <!--Inicio del menú-->
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html"></a>
        <img src="logo.png" alt="" href="index.html" width="135" height="80">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link" href="index.html">Inicio</a>
            <a class="nav-link" href="agregargraficoMeta.html">Ingresar ideas meta</a>
            <a class="nav-link" href="agregargrafico.html">Actualizar graficos</a>
          </div>
        </div>
      </div>
    </nav>
    <!--Fin del menu-->

    <!--Inicio botones-->
        <div class="col-lg-12" style="padding-top:20px; text-align:center;">
            <div class="card">
                    <div class="card-header">
                        IDEAS POR CADA MES
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-2">
                                <button class="btn btn-primary" onclick="CargarDatosGraficosBar()
                                ">Grafica de Metas </button>
                            </div>
                            <canvas id="graficametas" width="400" height="400"></canvas>
                            <div class="col-lg-2">
                                <button class="btn btn-primary" onclick="CargarDatosGraficosBarLineal()
                                ">Grafica Real </button>
                            </div>
                            <canvas id="graficareal" width="400" height="400"></canvas>
                        </div>
                        <a href="index.html" class="btn btn-primary">Ir al menú de inicio</a>
                    </div>
            </div>
        </div>
        <!--Fin botones-->
  </body>
</html>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://stackpath.bootsapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>

    <script>
        
function CargarDatosGraficosBar(){
    $.ajax({
        url:'controlador_graficoMetas.php' ,
        type: 'POST'
    }).done(function(resp){
                var titulo = [];
                var cantidad = [];
                var data = JSON.parse(resp);
                for(var i=0; i<data.length; i++){
                    titulo.push(data[i][1]);
                    cantidad.push(data[i][2]);
                }
                var ctx = document.getElementById('graficametas');
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: titulo,
                        datasets: [{
                            label: 'IDEAS META DEL MES',
                            data: cantidad,
                            backgroundColor: [
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [

                                'rgba(75, 192, 192, 1)',

                            ],
                            borderWidth: 3
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
    })
}

function CargarDatosGraficosBarLineal(){
    $.ajax({
        url:'controlador_grafico.php' ,
        type: 'POST'
    }).done(function(resp){
                var titulo = [];
                var cantidad = [];
                var data = JSON.parse(resp);
                for(var i=0; i<data.length; i++){
                    titulo.push(data[i][1]);
                    cantidad.push(data[i][2]);
                }
                var ctx = document.getElementById('graficareal');
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: titulo,
                        datasets: [{
                            label: 'CANTIDAD DE IDEAS TOTALES DEL MES',
                            data: cantidad,
                            backgroundColor: [
                                'rgba(153, 102, 255, 0.2)'
                            ],
                            borderColor: [
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 3
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
    })
}

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
