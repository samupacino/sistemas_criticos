<?php
    class Conexion{
        private static  $dsn;
        private static  $username;
        private static  $password;
        private static $pdo;
        public function __construct(){
            
        }
        public static function open(){
            self::$pdo=null;
            self::parametros();
            self::$pdo = new PDO(self::$dsn, self::$username, self::$password);
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      
          return self::$pdo;
        }
        private  static function parametros(){
            
            self::$dsn="mysql:host=localhost;dbname=sistemascriticos";
            self::$username="root";
            self::$password="inesvargas";
        }
        public static function close(&$db,&$ps){
            self::$pdo=null;
            $db = null;
            $ps = null;   
        }
    }

?>
