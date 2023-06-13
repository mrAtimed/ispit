<?php
class DB {
    private static $_instance;
    private $_host = "localhost";
    private $_username = "root";
    private $_password = "pass";
    private $_dbname = "q";
    
    private $_connection;

    public static function getInstance()
    {
        if (!self::$_instance) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }
    private function __construct()
    {
        $this->_connection = new mysqli(
            $this->_host,
            $this->_username,
            $this->_password,
            $this->_dbname
        );

        if (mysqli_connect_error()) {
            trigger_error("----" . mysqli_connect_error(),);
        }
    }

    public function getConnection()
    {
        return $this->_connection;
    }
}

