<?php
    
    class ConexionBBDD{
        private static  $dsn;
        private static  $username;
        private static  $password;
        public function __construct(){

        }
        public static function conexion(){
            $createPDO=null;
       
            ConexionBBDD::parametros();
            $createPDO = new PDO(ConexionBBDD::$dsn,ConexionBBDD::$username,ConexionBBDD::$password);
            $createPDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      
          return $createPDO;
        }
        private  static function parametros(){
            ConexionBBDD::$dsn="mysql:host=localhost;dbname=sistemascriticos";
            ConexionBBDD::$username="root";
            ConexionBBDD::$password="samuellujan1989";
        }
    }

?>
