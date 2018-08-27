<?php

namespace app\controllers;

use app\core\Controller;

class ProdutoController extends Controller{

    public function index() {
        echo "Controller produto padrao";
    }
    
    public function ver() {
        $this->load("v_produto");
    }
    
    public function lista($valor = 0) {
        echo "estou listando os clientes".$valor;
    }
    
}
