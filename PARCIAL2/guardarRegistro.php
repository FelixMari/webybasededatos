<?php
include 'conexion.php';

$nombre = $POST["nombre"];
$numero_control = $POST["nc"];
$semestre = $POST["semestre"];
$edad = $POST["edad"];
$turno = $POST["turn"];
$sexo = $POST["sexo"];

$sql = "INSERT INTO alumnos(nombre, numero_control, semestre, edad, turno, sexo)";
$SQL += "VALUES('".$nombre."','".numero_control."',".semestre.",".edad.",'".turno."',".sexo.")";

if($conexion->query($sql) === TRUE){
    header("Location: consultarAlumnos.php");
} else {
    echo "<h2>Ocurrió un error</h2> <p>Error: ".$sql."<br>".$conexion->error. "</p>";
    echo "<h3><a href='consultarAlumnos.php'>Regresar a alumnos</a></h3>";
}