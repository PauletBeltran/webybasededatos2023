<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Alumno</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="jquery-3.7.1"></script>
</head>
<body>
    <?php
    include 'menu.php';
    include 'conexion.php';

    $id = $_GET["id"];
    $sql = "SELECT * FROM alumnos WHERE id=" .$id;

    $datos = $conexion->query($sql);
    $alumno = $datos->fetch_assoc();
    ?>

    <div class="container">
        <div class="row">
            <div class="col-12 card m-4">
                <form action="actualizarRegistro.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $alumno["id"]; ?>">
                    <div class="form-group">
                        <label for="">Nombre</label>
                        <input value=<?php echo $alumno["nombre"]; ?> name="nombre" type="text" class="form-control" placeholder="Teclea el nombre del alumno" required>
                    </div>
                    <div class="form-group">
                        <label for="">Número de control</label>
                        <input value=<?php echo $alumno["numero_control"]; ?> name="nc" type="text" class="form-control" placeholder="Teclea el número de control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Semestre</label>
                        <input value=<?php echo $alumno["semestre"]; ?> name="semestre" type="number" class="form-control" placeholder="Teclea el semestre del alumno" required>
                    </div>
                    <div class="form-group">
                        <label for="">Edad</label>
                        <input value=<?php echo $alumno["edad"]; ?> name="edad" type="number" class="form-control" placeholder="Teclea la edad del alumno" required>
                    </div>
                    <div class="form-group">
                        <label for="">Turno:</label>
                       <select name="turno" id="" class="form-control" required>
                        <option value="<?php echo $alumno["turno"]; ?>"></option>
                         <option value="">Selecciona el turno</option>
                         <option value="MATUTINO">MATUTINO</option>
                         <option value="VESPERTINO">VESPERTINO</option>
                       </select>
                    </div>
                    <div class="form-group">
                        <label for="">Sexo:</label>
                       <select name="sexo" id="" class="form-control" required>
                        <option value="<?php echo $alumno["sexo"]; ?>"></option>
                         <option value="">Selecciona el sexo</option>
                         <option value="0">Mujer</option>
                         <option value="1">Hombre</option>
                       </select>
                    </div><br>
                    <div>
                        <input type="submit" value="Registrar" class="btn btn-primary">
                        <a href="consultarAlumnos.php" class="btn btn-danger">Cancelar</a>
                    </div><br>
                </form>
            </div>
        </div>
    </div>
    
    <footer class="text-center">
        <hr>
        CETis107 & copy; 2023
    </footer>

    <script src="js/bootstrap.js"></script>
</body>
</html>