<?php
$server = "localhost";
$user = "#";
$password = "#";
$db = "#";

$conexion = new mysqli($server, $user, $password, $db);
if($conexion->connect_error){
    die("La conexión ha fallado" - $conexion->connect_error);
}