<?php

    ### HOST ###

    /** O host HTTP da aplicação */
    define('_DOMAIN', 'http://' . $_SERVER['HTTP_HOST']);


    ### PATH ###

    /** O path dos controladores da aplicação */
    define('CONTROLLERS', 'application/controllers/');

    /** O use dos controladores da aplicação */
    define('USE_CONTROLLERS', 'application\controllers');

    /** O path dos modelos da aplicação */
    define('MODELS', 'application/models/');

    /** O path das visualizações da aplicação */
    define('VIEWS', 'resources/views/');

    /** O path dos espólios da aplicação */
    define('ASSETS', 'resources/assets/');


    ### DATABASE ###

    /** O nome do host do MySQL */
    define('DB_HOST', 'mysql.escalan1.kinghost.net');

    /** O nome do banco de dados MySQL */
    define('DB_NAME', 'escalan102');

    /** Usuário do banco de dados MySQL */
    define('DB_USER', 'escalan102');

    /** Senha do banco de dados MySQL */
    define('DB_PASS', 'king0512');

    /** O nome do banco de dados MySQL */
    define('DB_CHARSET', 'SET NAMES utf8');


    ### OAUTH ###

    /** O id do cliente que foi atribuido */
    define('CLIENT_ID', 'layout-pa');

    /** A senha do cliente que foi atribuida */
    define('CLIENT_SECRET', 'doscohab03');

    /** A URL do sistema colaborador */
    define('URL_COLABORADOR', 'https://colaborador.kinghost.net');

    /** O path de autorização */
    define('URL_AUTH', '/oauth/authorize');

    /** O path de busca do token*/
    define('URL_ACESS_TOKEN', '/oauth/access_token');

    /** O path de busca de detalhes */
    define('URL_DETAILS', '/me');