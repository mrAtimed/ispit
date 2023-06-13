<?php

class DB {
    private static $instance = null;
    private $pdo;

    private function __construct($env) {
        try {
            $this->pdo = new PDO("mysql:host={$env['host']};dbname={$env['dbname']}", $env['username'], $env['password']);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo '---' . $e->getMessage();
        }
    }

    public static function getInstance($env) {
        if (self::$instance === null) {
            self::$instance = new self($env);
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->pdo;
    }
}