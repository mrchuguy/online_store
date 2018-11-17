<?php
spl_autoload_register(function ($class) {
    $path = '..'.DIRECTORY_SEPARATOR.'library' . DIRECTORY_SEPARATOR . $class . '.php';
    if (file_exists($path)) {
        include_once $path;
        return TRUE;
    }
    return FALSE;
});