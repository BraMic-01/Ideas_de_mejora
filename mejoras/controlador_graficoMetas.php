<?php
    require 'modelo_graficoMetas.php';

    $MG = new Modelo_GraficoMetas();
    $consulta = $MG-> TraerDatosGraficosMetaBar();
    echo json_encode($consulta);
?>