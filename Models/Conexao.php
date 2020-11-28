<?php 
    session_start();

    class Conexao {
        private static $instance;

        public static function getConnect() {
            if (!isset(self::$instance)) {
                self::$instance = new PDO("mysql:host=localhost; dbname=ongssystem; charset=utf8;", "root", "");                
            }

            return self::$instance;
        }
    }
?>