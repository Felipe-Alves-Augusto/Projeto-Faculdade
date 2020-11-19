<?php

    // classe para realizar a conexão segura com o banco de dados
    //caso der erro nao vai expor os dados do banco como a senha e o user

    class MySql{

        private static $pdo;
        public static function conectar(){
            if(self::$pdo == null){
                try{
                    self::$pdo = new PDO('mysql:host='.HOST.';dbname='.DATABASE,USER,PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
                    self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                } catch(Exception $e){
                    echo '<h1>Erro ao conectar no banco de dados</h1>';
                }

               
            }

            return self::$pdo;

        }
    }

?>