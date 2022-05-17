<?php

 	$servidor="localhost";
 	$usuario ="root";
 	$senha ="";
 	$dbname = "bd";

 	//Criar a conexão
 	$conn = mysql_connect($servidor, $usuario, $senha,$dbname);

 	//Checar conexão
//if ($conn->connect_error) {
 // die("Conexão falhou: " . $conn->connect_error);
//}
//echo "Conectado com sucesso";
?>
