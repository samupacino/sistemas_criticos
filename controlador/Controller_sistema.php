<?php
    require_once"modelo/consultas.php";

    class Controllersistemacritico{
        
        private $querys;

        public function __construct(){
            
        }
        public function index(){
            require_once"vista/main.php";
        }
        public function registro_save(){
                $querys = new Consultas();
                $datoArreglo = array();
                $datoArreglo['instrumento'] = $_POST['instrumento'];
                $datoArreglo['descripcion'] = $_POST['descripcion'];
                $datoArreglo['norma'] = $_POST['norma'];
                if($querys->Insertar($datoArreglo)){
                    $_SESSION['mensaje'] = "<p id='mensajeServer' >" . $querys->getMensaje() . "</p>";
                }
                require_once"vista/registro.php";
        }
        public function registro_view(){
            require_once"vista/registro.php";
        }

    }
?>

