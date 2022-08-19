<?php
    require_once"conexion.php";
    class Consultas{

        private $mensaje;

        public function __construct(){

        }
        public function Insertar($datos){
            $filasAfectados = false;
            $ds = null;
            $ps = null;
            try{
                $db = ConexionBBDD::conexion();
                $ps = $db->prepare("INSERT INTO instrumento (instID,instDescripcion,instNormaCodigo) VALUES(?,?,?)");
                $ps->execute(array($datos['instrumento'],$datos['descripcion'],$datos['norma']));  
            }catch(PDOException $e){
                $filasAfectados = true;
                $this->mensaje = $e->getMessage();
            } finally{
                $ds = null;
                $ps = null;
            } 
            return $filasAfectados;
        }
        public function getMensaje(){
            return $this->mensaje;
        }
    }
?>