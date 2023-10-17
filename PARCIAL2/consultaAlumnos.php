<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <?php include 'conexion.php';
    include 'menu.php';
    $sql = "SELECT * FROM alumnos";
    $datos = $conexion->query($sql); ?>

<footer class="text-center"><hr>
<span>Cetis 107 web app &copy; 2023</span>
</footer>
<script src="js/bootstrap.js"></script>
</body>
</html>