<?php

    session_start();
    if (!isset($_SESSION["usuario"])) {
    header('location: ../usuario/login.php');
    }

    include_once ($_SERVER['DOCUMENT_ROOT'].'/tallerphp20/routes.php');
    require_once(CONTROLLER_PATH.'matriculaController.php');
    $object = new matriculaController();
    $estudiantes = $object->combolistEs();
    $cursos = $object->combolistCur();
    $usuarios = $object->combolistUsu();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <title>Matriculas</title>
</head>
<body>
    <?php
        require_once(VIEW_PATH.'navbar/navbar.php');
    ?>
    <div class="container">
        <div class="mb-3">
            <h2>Agregando nuevo registro Matricula</h2>
        </div>
        <form id="formPersona" action="store.php" method="post" class="g-3 needs-validation" novalidate>
            
            <div class="mb-3">
                <label for="fecha" class="form-label">Fecha</label>
                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                <input type="date" class="form-control" id="fecha" name="fecha" autofocus required>
                <div class="invalid-feedback">ingrese o seleccione fecha válida!</div>
            </div>

            <div class="mb-3">
                <label for="idEstudiante" class="form-label">Nombre estudiante</label>
                <select class="form-control" name="idEstudiante" id="idEstudiante" required>
                    <option selected disabled value="">No especificado</option>
                    <!-- completar código completadoo!!! -->
                    <?php foreach ($estudiantes as $estudiante) { ?>
                    <option value="<?=$estudiante['idEstudiante']?>"><?=$estudiante['nombre']?></option> 
                    <?php } ?>
                </select>
                <div class="invalid-feedback">seleccione un elemento válido!</div>
            </div>

            <div class="mb-3">
                <label for="idCurso" class="form-label">Nombre curso</label>
                <select class="form-control" name="idCurso" id="idCurso" required>
                    <option selected disabled value="">No especificado</option>
                    <!-- completar código completado!!!-->
                    <?php foreach ($cursos as $curso) { ?>
                    <option value="<?=$curso['idCurso']?>"><?=$curso['nombre']?></option> 
                    <?php } ?>
                </select>
                <div class="invalid-feedback">seleccione un elemento válido!</div>
            </div>

            <div class="mb-3">
                <label for="idUsuario" class="form-label">Nombre usuario</label>
                <select class="form-control" name="idUsuario" id="idUsuario" required>
                    <option selected disabled value="1">Administrador</option>
                </select>
                <div class="invalid-feedback">seleccione un elemento válido!</div>
            </div>                        
            <button type="submit" class="btn btn-primary btn-lg col-4">Guardar</button>
            </form>
    </div>
</body>
<script src="../../assets/js/bootstrap.bundle.min.js"></script>
<script src="../../assets/js/jquery.min.js"></script>
<script src="../../assets/js/validate.js"></script>

</html>