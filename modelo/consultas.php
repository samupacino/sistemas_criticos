<?php
    require_once"Conexion.php";
    class Consultas{

        private $mensaje;

        public function __construct(){

        }
        public function Insertar($datos){
            $filasAfectados = false;
            $ds = null;
            $ps = null;
            try{
                $db = Conexion::conexion();
                $ps = $db->prepare("INSERT INTO instrumento (instID,instDescripcion,instNormaCodigo) VALUES(?,?,?)");
                $ps->execute(array($datos['instrumento'],$datos['descripcion'],$datos['norma']));  
            }catch(PDOException $e){
                $filasAfectados = true;
                $this->mensaje = $e->getMessage();
            } finally{
                $ds = null;
                $ps = null;
            } 
            return $filasAfe;
        }
        public function pruebaquery(){
            $datos = ["samuel","lujan","sarasi"];
            $datosdos = ["ines","lujan","sarasi"];

            $conexion = Conexion::conexion();
            $ps = $conexion->prepare("INSERT INTO instrumento (instID,instDescripcion,instNormaCodigo) VALUES(?,?,?)");
            $ps->execute(array($datos[0],$datos[1],$datos[2]));
            //$ps->execute(array($datosdos[0],$datosdos[1],$datosdos[2]));
        }
        public function getMensaje(){
            return $this->mensaje;
        }
    }
?>