<?php
    class matriculaController {
        private $model;
        
        public function __construct() {
            include_once ($_SERVER['DOCUMENT_ROOT'].'/tallerphp20/routes.php');
            require_once(MODEL_PATH.'matriculaModel.php');
            $this->model = new matriculaModel();
        }

        public function insert($fecha,$idEstudiante,$idCurso,$idUsuario){
            $id = $this->model->insertar($fecha,$idEstudiante,$idCurso,$idUsuario);
            return ($id!=false) ? header('location: ./index.php') : header('location: ./create.php');
        }

        public function update($id,$fecha,$idEstudiante,$idCurso,$idUsuario){
            return ($this->model->actualizar($id,$fecha,$idEstudiante,$idCurso,$idUsuario) != false) ? header('location: ./index.php') : header('location: ./edit.php?id='.$id);
        }

        public function delete($id){
            return ($this->model->eliminar($id)) ? header('location: ./index.php') : header('location: ./index.php') ;
        }

        public function search($id){
            return ($this->model->buscar($id) != false) ? $this->model->buscar($id) : header('location: ./index.php');
        }

        public function select(){
            return ($this->model->listar()) ? $this->model->listar() : false;
        }

        public function combolistEs(){
            return ($this->model->cargarDesplegableEstudiante()) ? $this->model->cargarDesplegableEstudiante() : false;
        }

        public function combolistCur(){
            return ($this->model->cargarDesplegableCurso()) ? $this->model->cargarDesplegableCurso() : false;
        }

        public function combolistUsu(){
            return ($this->model->cargarDesplegableUsuario()) ? $this->model->cargarDesplegableUsuario() : false;
        }
        //agregar funciones faltantes ya complete como entendi
    }