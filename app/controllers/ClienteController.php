<?php

namespace app\controllers;

use app\core\Controller;

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
        echo "estou listando os clientes";
    }
    
 
    
}
