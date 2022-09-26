<?php
    require_once"Conexion.php";
    class Consultas{

        public function __construct(){

        }
        public function insertar($datos){
            $filasAfectados = false;
            $ds = null;
            $ps = null;
            echo "asdsa";
            try{
                $db = Conexion::open();
                $ps = $db->prepare("INSERT INTO instrumento (instID,instDescripcion,instNormaCodigo) VALUES(?,?,?)");
                $ps->execute(array($datos['instrumento'], $datos['descripcion'], $datos['norma']));  
            }catch(PDOException $e){
                $_SESSION['mensaje'] = "<p id='mensajeServer' >" . $e->getMessage() ;
                $this->mensaje = $e->getMessage();
            } finally{
                Conexion::close($ds,$ps);
            } 
            return $filasAfectados;
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
        public function pruebaquery(){
            $datos = ["samuel","lujan","sarasi"];
            $datosdos = ["ines","lujan","sarasi"];

            $conexion = Conexion::open();
            $ps = $conexion->prepare("INSERT INTO instrumento (instID,instDescripcion,instNormaCodigo) VALUES(?,?,?)");
            $ps->execute(array($datos[0],$datos[1],$datos[2]));
            //$ps->execute(array($datosdos[0],$datosdos[1],$datosdos[2]));
        }
        public function getMensaje(){
            return $this->mensaje;
        }
    }
?>