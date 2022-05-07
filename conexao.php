<?php
    class Conexao {
        private static $dbHost = 'localhost';
        private static $dbName = 'imobiliaria';
        private static $dbUser = 'root';
        private static $dbPassword = '';

        private static $cont = null;

        public function __construct() {
            die("Construtor da classe de Conexão inicializado.");
        }

        public static function conectar() {
            if (self:: $cont == null) {
                try {
                    self::$cont = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName, self::$dbUser, self::$dbPassword);
                } 
                catch (PDOException $ex) {
                    die ($ex->getmessage());
                }
            }    
            return self::$cont;
        }

        public static function desconectar() {
            self::$cont = null; 
        }
    }
?>