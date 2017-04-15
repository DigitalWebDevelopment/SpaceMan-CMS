<?php

namespace digiwebdev\spaceman\controllers;

/*
 * Config controller class simply store configuration values in a static array
 * to be used by various parts of the application when required
 */
class Config {
    
    /**
     *
     * @var array
     */
     protected static $config = [];
     
     /**
      * Returns the value stored in $config associative array where the key is 
      * equal to $key
      * 
      * @param string $key
      * @return mixed
      */
     public static function get($key) {
        return self::$config[$key];
     }
     
     /**
      * Store a new value in the $config associative array identified by the
      * value of $key
      * 
      * @param string $key
      * @param mixed $val
      */
     public static function set($key, $val) {
        self::$config[ $key ] = $val;
     }
}

