<?php

spl_autoload_register(function ($class) {
    $class = str_replace('Filmography\\', '', $class);
    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class);
    $filepath = __DIR__ . '/includes/classes/' . $class . '.php';
    $filepath = str_replace("/", DIRECTORY_SEPARATOR, $filepath);

    if (file_exists($filepath)) {
        require_once $filepath;
    }
});

// TESTING AUTOLOAD

