<?php
    require_once"Conexion.php";
    class Consultas{

        public function __construct(){

        }
        public function insertar($datos){
            $ds = null;
            $ps = null;
            try{
                $db = Conexion::open();
                $ps = $db->prepare("INSERT INTO instrumento (codigo,instID,instDescripcion,instNormaCodigo) VALUES(?,?,?)");
                $ps->execute(array($datos['instrumento'], $datos['descripcion'], $datos['norma']));  
            }catch(PDOException $e){
                $_SESSION['mensaje'] = "<p id='mensajeServer' >" . $e->getMessage() ;
            } finally{
                Conexion::close($ds,$ps);
            } 
        }
        public function listar(){
            $db = null;
            $ps = null;
            $resultado = array();
            try{
                $db = Conexion::open();
                $ps = $db->prepare("select * from instrumento");
                $ps->execute();
                $resultado = $ps->fetchAll(PDO::FETCH_ASSOC);
            }catch(PDOException $e){
                $_SESSION['mensaje'] = "<p id='mensajeServer' >" . $e->getMessage() ;
            }finally{
                Conexion::close($db, $ps);
            }
            return $resultado;
        }
    }
?>