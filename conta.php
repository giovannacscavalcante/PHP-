<?php

Class Conta{

    public $saldo = 0;
    public  $titular;
    
    function sacar($valor){
        if (($this -> saldo > 0) && ($this -> saldo >= $valor)){
            $this -> saldo -= $valor;
        } else {
            echo "Saldo insuficiente! :(";
        }
    }
    
    function depositar($valor){
        $this -> saldo += $valor;
    }

    function verSaldo(){
        echo "Saldo atual: " . $this -> saldo . "<br>";
    }

}
$conta = new Conta;
$conta -> depositar (500);
$conta -> sacar(20);

$conta2 = new Conta;
$conta2 -> depositar(250);
$conta2 -> verSaldo();


$conta3 = new Conta;

?>