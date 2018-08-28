 <?php
require './vendor/autoload.php';
require './config/config.php';
require './app/core/Core.php';


$core = new Core;
echo "<pre>";
$core->run();

//echo "<br>Controller: " .$core->getController() . "<br>";
//echo "Metodo: " .$core->getMetodo(). "<br>";
//
//
//foreach ([$core->getParametros()] as $param){
//        foreach ($param as $value) {
//        echo "Parametro: " . $value . "<br>";
//      }
//}

    
