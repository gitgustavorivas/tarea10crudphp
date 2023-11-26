<?php
//completar códiogo completado
include_once ($_SERVER['DOCUMENT_ROOT'].'/tallerphp20/routes.php');
    
require_once(CONTROLLER_PATH.'matriculaController.php');
$object = new matriculaController();

$idMatricula = $_REQUEST['id'];
$fecha = $_REQUEST['fecha'];
$idEstudiante = $_REQUEST['nombre'];
$idCurso = $_REQUEST['nombre'];
$idUsuario = $_REQUEST['alias'];

$object->update($idMatricula,$fecha,$idEstudiante,$idCurso,$idUsuario);
?>