<?php

include "objetoCliente.php";

$giovanna = new Cliente();
$giovanna ->pagarConta(100);
$giovanna->confirmarPagamento();
$giovanna->nome="Giovanna";
$giovanna->saldo=100;
echo "Nome: $giovanna->nome <br>";
echo "Saldo:$giovanna->saldo <br>";
?>