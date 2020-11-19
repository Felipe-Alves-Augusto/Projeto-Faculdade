<?php

    class Painel {

        // função para realizar o login
        public static function logado(){

            return isset($_SESSION['login']) ? true : false;

        }

        //função para realizar o loggout
        public static function loggout(){
            session_destroy();
            header('Location:'.INCLUDE_PATH_PAINEL);
        }

    }

?>