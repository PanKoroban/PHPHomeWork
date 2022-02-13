<?php
spl_autoload_register("Autoload");

function Autoload($className)
{
    $dirs = [
        'c',
        'v',
        'm'
    ];
    $found = false;
    foreach ($dirs as $dir) {
        $fileName = __DIR__ . '/' . $dir . '/' . $className . '.php';
        if (is_file($fileName)) {

            require_once($fileName);
            $found = true;
        }
    }
    //$obj = new A;

    if (!$found) {
        throw new Exception('Unable to load ' . $className);
    }
    return true;
}