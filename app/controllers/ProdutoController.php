<?php

namespace app\controllers;

class ProdutoController{

    public function index() {
        echo "Controller produto padrao";
    }
    
    public function lista($valor = 0) {
        echo "estou listando os clientes".$valor;
    }
    
}
