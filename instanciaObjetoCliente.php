<?php

include "objetoCliente.php";

$giovanna = new Cliente();
$giovanna ->pagarConta(100);
$giovanna->confirmarPagamento();

?>