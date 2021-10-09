<?php
    class Modelo_GraficoMetas{
        private $conexion;
        function __construct()
        {
            require_once('conexiongraficaMetas.php');
            $this->conexion = new conexion();
            $this->conexion->conectar();
        }

        function TraerDatosGraficosMetaBar(){
            $sql = "CALL SP_GRAFICOSMETA_BAR";
            $arreglo = array();
            if ($consulta = $this->conexion->conexion->query($sql)) {

                while ($consulta_VU = mysqli_fetch_array($consulta)) {
                    $arreglo[] = $consulta_VU;
                }
                return $arreglo;
                $this->conexion->cerrar();
            }
        }
    }
?>
