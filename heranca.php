<?php

class Conta
{

    public $saldo = 0;
    public  $titular;

    function sacar($valor)
    {
        if (($this->saldo > 0) && ($this->saldo >= $valor)) {
            $this->saldo -= $valor;
        } else {
            echo "Saldo insuficiente! :(";
        }
    }

    function depositar($valor)
    {
        $this->saldo += $valor;
    }

    function verSaldo()
    {
        echo "Saldo atual: " . $this->saldo . "<br>";
    }
}

class ContaCorrente extends Conta
{
    function transferir($contaDestino, $valor)
    {
        $this->saldo -= $valor;
    }
}

$conta = new Conta;
$conta -> depositar (500);
$conta -> sacar(20);
$conta -> verSaldo();

$conta2 = new Conta;
$conta2 -> depositar(250);
$conta2 -> verSaldo();

$novaconta = new ContaCorrente();
$novaconta->transferir('xxx-xxx', 500);
echo "Saldo : " . $novaconta->saldo;
