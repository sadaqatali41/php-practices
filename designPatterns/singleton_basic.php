<?php

class Singleton {
    private static $instance = null;
    
    private function __construct() {
        echo "Instance is already created.";
    }
    
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new Singleton();
        }
        return self::$instance;
    }
}