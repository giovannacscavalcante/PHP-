<?php

class Caneta {

    public $cor;
    public $ponta;
    public $modelo;
    
    function escrever(){
        echo "A caneta está escrevendo!";
    }
    
}

$bic = new Caneta;

$bic->cor = "azul";
$bic->escrever();

?>
