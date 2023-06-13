<?php

spl_autoload_register(function ($className) {
    $classFile = __DIR__ . '/' . $className . '.php';
    if (file_exists($classFile)) {
        require_once $classFile;
    }
});


$db = DB::getInstance();

$mysqli = $db->getConnection();

if ($mysqli) {
    echo 'Dela!';
} else {
    echo 'E jeb*ga!';
}