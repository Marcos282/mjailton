<?php

namespace app\models;

class Model{
    
    protected $conn;
    
    public function __construct() {
        
        $this->conn = new \PDO("pgsql:host=".SERVIDOR.";dbname=".BANCO."", USUARIO, SENHA);

                
    }
    
}
