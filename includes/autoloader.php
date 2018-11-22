<?php
// include_once '../includes/config.php';
spl_autoload_register(function ($class) {
    $path = 'library' . DIRECTORY_SEPARATOR . $class . '.php';
    if (file_exists($path)) {
        include_once $path;
        return TRUE;
    }
    return FALSE;
});