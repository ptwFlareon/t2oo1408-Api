<?php

namespace MyApp\Services;

class Conexao {
    
    private static $instance;
    private $pdo;

    private function __construct() {
        $this->pdo = new \PDO("mysql:host=localhost; port=3306; dbname=singleton",
        "root", "", array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    }
    
    public function getPdo(){
        return $this->pdo;
    }
    
    public static function getInstance(){
        if (!self::$instance) {
            self::$instance = new Conexao();
        }
        return self::$instance;
    }
    
}
