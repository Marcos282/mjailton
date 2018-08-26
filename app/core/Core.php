<?php

class Core{
    
    private $controller;
    private $metodo;
    private $parametros = array();
    
    
    public function __construct() {
        $this->verificaUri();
    }

    public function run(){
       
       $controllerCorrente = $this->getController();        
//      echo $controllerCorrente;
       $c = new $controllerCorrente;
       
       call_user_func_array(array($c, $this->getMetodo()), $this->getParametros());      
        
    }
    

    public function verificaUri() {
       $url = explode("index.php",$_SERVER["PHP_SELF"]);
       $url = end($url);
        
       if ($url != ""){
           $url = explode("/", $url); 
            
           // PEGA O CONTROLLER
           array_shift($url);
           $this->controller = ucfirst($url[0]) . "Controller";
           
           //PEGA O METODO 
           if(isset($url[0])){
                array_shift($url);
                $this->metodo = $url[0];
           }
           //PEGA OS PARAMETROS
           if(isset($url[0])){
                array_shift($url);
                $this->parametros = array_filter($url);
           }
       }else{
           
            $this->controller = ucfirst(CONTROLLER_PADRAO) ."Controller";
       }
       
//       var_dump($url);
    }
    
    function getController() {
        if(class_exists(NAMESPACE_CONTROLLER.$this->controller)){
            
        
        return NAMESPACE_CONTROLLER.$this->controller;
        
        }
        return NAMESPACE_CONTROLLER .ucfirst(CONTROLLER_PADRAO) ."Controller";
    }

    function getMetodo() {
        if(method_exists(NAMESPACE_CONTROLLER.$this->controller, $this->metodo)){
        return $this->metodo; 
        }
        return "index";
    }

    function getParametros() {
        return $this->parametros;
    }


}
