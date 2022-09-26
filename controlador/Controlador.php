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
                $datoArreglo['instrumento'] = $_POST['instrumento'];
                $datoArreglo['descripcion'] = $_POST['descripcion'];
                $datoArreglo['norma'] = $_POST['norma'];
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

