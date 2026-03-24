<?php
session_start();

require_once __DIR__ . '/../config/config.php';

spl_autoload_register(function ($class) {
    $path = __DIR__ . '/../' . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
    if (file_exists($path)) {
        require_once $path;
    }
});

$router = new Core\Router();