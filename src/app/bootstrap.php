<?php

// Carrega config
require_once 'config/config.php';

// Autoload Core Libraries
// spl_autoload_register return all used Classes
spl_autoload_register(function($className) {
    require_once 'libraries/' . $className . '.php';
});