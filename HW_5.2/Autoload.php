<?php


spl_autoload_register(function ($classname) {
    $fileExtension = ".php";
    $dirs = [
        'Adapter',
        'OutLib'
    ];

    foreach ($dirs as $dir) {

        $file = __DIR__ . '/' . $dir . '/' . $classname . $fileExtension;

        if (is_file($file)) {
            require $file;
            break;
        }
    }
});


