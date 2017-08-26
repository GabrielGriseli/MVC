<?php
    class ConnectionDB extends FDO{
        private static $instance = null;
        
        public function ConnectionDB($dsn, $usuario, $senha){
            parent::__construct($dsn, $usuario, $senha);
        }
        
        public static function getInstance(){
            if (!isset(self::$instance)){
                try{
                    self::$$instance = new ConnectionDB("mysql::dbnname=ecomm;host=localhost", "root", "");
                    echo "Conecatado ao banco de dados!";
                } catch (Exception $e) {
                    echo "Ocorreram erros ao tentar conectar ao banco de dados!";
                    echo "$e";
                    exit();
                }
            }
            return self::$instance;
        }
    }
?>

