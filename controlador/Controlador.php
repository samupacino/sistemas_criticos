<?php
    require_once"modelo/Consultas.php";

    class Controlador{

        public function __construct(){
            
        }
        public function index(){
            $querys = new Consultas();
            $resultado = $querys->listar();
            require_once"vista/main.php";
        }
        public function guardar(){
                $querys = new Consultas();
                $datoArreglo = array();
                $datoArreglo['id'] = $_POST['id'];
                $datoArreglo['instrumento'] = $_POST['instrumento'];
                $datoArreglo['norma'] = $_POST['norma'];
                $datoArreglo['descripcion'] = $_POST['descripcion'];
                $querys->insertar($datoArreglo);
                header('Location: index.php?registro');
        }
    
        public function registro(){
            require_once"vista/registro.php";
        }
        public function eliminar(){
            
        }

    }
?>

