<?php

spl_autoload_register(function ($class) {
    $prefix = "Source\\";
    $baseDir = __DIR__ . "/";
    $len = strlen($prefix);
    //var_dump(strncmp($prefix, $class, $len)!==0);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relativeClass = substr($class, $len);

    $file = $baseDir . str_replace("\\", "/", $relativeClass) . ".php";
    if (file_exists($file)) {
        require $file;
    }
});