<?php

	//session_start();
	include_once("conexao.php");
	echo"<br>"

	$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);



$result_usuario="INSERT INTO usuarios (nome) VALUES ('$nome')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

//if(mysql_insert_id($conn)){
//	$SESSION
//}

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";



?>