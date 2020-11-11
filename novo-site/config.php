<?php

    session_start();
    $autoLoad = function($class){

     

        include('classes/'.$class.'.php');

    };

    spl_autoload_register($autoLoad);

    define('INCLUDE_PATH', 'http://localhost/novo-site/');
    define('INCLUDE_PATH_PAINEL', INCLUDE_PATH.'painel/');

    //fazendo a conexão com o banco
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASSWORD', '');
    define('DATABASE', 'empresa');
    



?>