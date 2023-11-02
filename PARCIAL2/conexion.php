<?php
$server = "localhost";
$user = "root";
$password = "";
$basededatos = "alumnos";

$conexion = new mysqli($server, $user, $password, $basededatos);

if($conexion->connect_error){
    die("Fallo la conexion" .$conexion->connect_error);
}
?>