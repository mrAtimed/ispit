<?php

class ConfigLoader {
    private $data;

    public function __construct($path) {
        if (file_exists($path)) {
            $this->data = require($path);
        } else {
            $this->data = [];
        }
    }

    public function getConfigValue($key) {
        return $this->data[$key] ?? null;
    }
}
