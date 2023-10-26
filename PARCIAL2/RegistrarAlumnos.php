<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar alumnos</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="code.jquery.com_jquery-3.7.1.min.js"></script>
</head>
<body>
    <?php include 'menu.php'; ?>
    <div class="container">
        <div class="row">
            <div class="col-12 card m-4 p-4">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="">Nombre:</label>
                        <input name="nombre" type="text" class="form-control" placeholder="Teclea el nombre del alumno..." required>
                    </div>
                    <div class="form-group">
                        <label for="">Número de control:</label>
                        <input name="no_control" type="text" class="form-control" placeholder="Teclea el número de control del alumno..." required>
                    </div>
                    <div class="form-group">
                        <label for="">Semestre:</label>
                        <input name="semestre" type="text" class="form-control" placeholder="Teclea el semestre del alumno..." required>
                    </div>
                    <div class="form-group">
                        <label for="">Edad:</label>
                        <input name="edad" type="text" class="form-control" placeholder="Teclea la edad del alumno..." required>
                    </div>
                    <div class="form-group">
                        <label for="">Turno:</label>
                        <select name="turno" class="form-control" required>
                            <option value="">Selecciona el turno:</option>
                            <option value="Matutino">Matutino</option>
                            <option value="Vespertino">Vespertino</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Sexo:</label>
                        <select name="turno" class="form-control" required>
                            <option value="">Selecciona el sexo:</option>
                            <option value="0">Femenino</option>
                            <option value="1">Masculino</option>
                            <option value="2">Prefiero no decirlo</option>
                        </select>
                    </div><br>
                    <div>
                        <input type="submit" value="registrar" class="btn btn-primary">
                        <a href="consultaAlumnos.php" class="btn btn-danger">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
<footer class="text-center"><hr>Cetis 107 web app &copy; 2023</footer>
<script src="js/bootstrap.bundle.js"></script>
</body>
</html>