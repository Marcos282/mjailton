<?php

namespace app\controllers;

use app\core\Controller;
use app\models\M_Cliente;



class ClienteController extends Controller{

    public function index() {
        echo "Controller cliente padrao";
    }
    
     public function ver() {
        $dados['nome'] = "Marcos Sousa";
        $dados['email'] = "novahot@gmail.com";
        $this->load("v_cliente",$dados);
    }
    
    
    public function lista() {
        $clientes = new M_Cliente();     
//        var_dump($clientes->lista());
        
        $dados["clientes"] = $clientes->lista();
        $this->load("v_cliente",$dados);
        
    }
    
 
    
}
