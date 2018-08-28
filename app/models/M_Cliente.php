<?php

namespace app\models;

use app\models\Model;

class M_Cliente extends Model {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function lista() {
        
        $sql = "Select * from funcionario";
        
        $qry = $this->conn->query($sql);
        
        return $qry->fetchAll();
        
    }
    
}