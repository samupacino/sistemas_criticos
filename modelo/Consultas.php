<?php
    require_once"Conexion.php";
    class Consultas{

        public function __construct(){

        }
        public function insertar($datos){
            $db = null;
            $ps = null;
            try{
                $db = Conexion::open();
                $ps = $db->prepare("INSERT INTO instrumento (codigoInstrumento,instID,instNorma,instDescripcion) VALUES(?,?,?,?)");
                $ps->execute(array($datos['id'], $datos['instrumento'], $datos['norma'],$datos['descripcion']));  
            }catch(PDOException $e){
                $_SESSION['mensaje'] = "<p id='mensajeServer' >" . $e->getMessage() ;
            } finally{
                Conexion::close($db,$ps);
            } 
        }
        public function listar(){
            $db = null;
            $ps = null;
            $resultado = array();
            try{
                $db = Conexion::open();
                $ps = $db->prepare("SELECT * FROM instrumento");
                $ps->execute();
                $resultado = $ps->fetchAll();
                print_r($resultado);
            }catch(PDOexception $e){
                $_SESSION['mensaje'] = "<p id='mensajeServer' >" . $e->getMessage() ;
            }
            return $resultado;
        }
    }
?>