<?php

spl_autoload_register(function ($className) {
    $classFile = __DIR__ . '/' . $className . '.php';
    if (file_exists($classFile)) {
        require_once $classFile;
    }
});

$path = __DIR__ . '/env.php';
$configManager = new ConfigLoader($path);
$dbConnection = DB::getInstance();
$mysql = $dbConnection->getConnection();

if ($mysql) {
    echo 'Dela!';
}