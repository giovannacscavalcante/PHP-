<?php

Class Conta{
	public $saldo = 000;
	public $titular;

	function sacar($valor){
		if(($this->saldo > 0) && ($this->saldo >= $valor))
		{
		$this->saldo -= $valor;	
	}
		else{
		echo "Saldo insuficiente";
	}	
}
		function depositar($valor){
		$this->saldo += $valor;
	}
		function verSaldo(){
		echo "Saldo Atual:" .$this->saldo. "<br>";
	}
	}	

	class ContaCorrente extends Conta {
		function transferir($contaDestino, $valor){
			$this->saldo -= $valor;
		}	
}
echo "Conta 1 <br>";
$conta1 = new Conta();
$conta1->verSaldo();
$conta1->depositar(500);
$conta1->verSaldo();
$conta1->sacar(20);
$conta1->verSaldo();
echo "<br>";
echo "<br>";
echo "Conta Corrente <br>";
$novaConta = new ContaCorrente();
$novaConta->depositar(500);
$novaConta->transferir('xxx-xxx', 500);
echo "Saldo: ".$novaConta->saldo;

//////////////////////////////////////////////////////////////////////////



?>

