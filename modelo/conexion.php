<?php
    class Conexion{
        private static  $dsn;
        private static  $username;
        private static  $password;
        private static $pdo;
        public function __construct(){
            
        }
        public static function conexion(){
            self::$pdo=null;
            self::parametros();
            self::$pdo = new PDO(self::$dsn, self::$username, self::$password);
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      
          return self::$pdo;
        }
        private  static function parametros(){
            /*
            ConexionBBDD::$dsn="mysql:host=localhost;dbname=sistemascriticos";
            ConexionBBDD::$username="root";
            ConexionBBDD::$password="samuellujan1989";
            */
            self::$dsn="mysql:host=localhost;dbname=sistemascriticos";
            self::$username="root";
            self::$password="root";
        }
        public static function referencia(&$pd){
            $pd = null;
            self::$pdo=null;
        }
        public static function status(){
            if(self::$pdo == null){
                echo "nulo pdo";
            }else{
                echo "pdo contruido";
            }
        }
    }

?>
