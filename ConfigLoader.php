<?php

class ConfigLoader
{
    private static ?ConfigLoader $instance = null;
    private array $config = [];
    
    private function __construct()
    {
        $this->config = require './env.php';;
    }

    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            return self::$instance = new ConfigLoader();
        }

        return self::$instance;
    }

    public function get(string $key)
    {
        return array_key_exists($key, $this->config) ? $this->config[$key] : null;
    } 
}