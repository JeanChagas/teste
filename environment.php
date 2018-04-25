<?php

    /**
     *
     *  Se o caminho raiz ainda não tenha sido definido, passará a definir a configuração
     *
     **/

    if (!defined('ROOT_PATH')){


        define('ROOT_PATH', dirname(__FILE__));
        require_once (ROOT_PATH.'/system/config.php');

    }

    /**
     *
     *  Faz o load do autoload
     *
     **/

    require_once (ROOT_PATH.'/system/autoload.php');


    spl_autoload_register(['Autoloader', 'load']);



    $start = new system\System;
    $start->run();