<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<h2>BEM-VINDO</h2>


<?php

 Class CLIENTE{
 	public $nome;
 	public $saldo;

 	public function confirmarPagamento(){
 		echo "Pagamento confirmado";
 	}





 	public function pagarConta($valor){


 	echo "Foi pago o valor de ".$valor ;
 	echo "<br>";
 }

}
?>

</body>
</html>