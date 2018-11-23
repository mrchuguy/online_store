<?php
// include_once '../includes/config.php';
include_once $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR.'includes/config.php';
spl_autoload_register(function ($class) {
    $path = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR.'library' . DIRECTORY_SEPARATOR . $class . '.php';
    if (file_exists($path)) {
        include_once $path;
        return TRUE;
    }
    return FALSE;
});