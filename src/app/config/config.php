<?php

/**
 *  
 *  Configuração de váriaveis de ambiente
 * 
 *  Define: Seta variáveis diponíveis dentro da aplicação
 */


// DB Params
define('DB_HOST', '_DB_HOST_');
define('DB_USER', '_DB_USER_');
define('DB_PASSWORD', '_DB_PASSWORD_');
define('DB_NAME', '_DB_NAME_');

// define('DB_HOST', 'db');
// define('DB_USER', 'postgres');
// define('DB_PASSWORD', 'postgres-admin');
// define('DB_NAME', 'php_mvc_database');

// App Root
define('APPROOT', dirname(dirname(__FILE__)));

// Url root
// define('URLROOT', 'http://localhost');
define('URLROOT', '_URLROOT_');

// Site root
// define('SITENAME', 'php-mvc');
define('SITENAME', '_SITENAME_');