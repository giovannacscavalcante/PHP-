<?php

function mais5 (&$numero) {
    $numero +=5;
    return $numero;
}
$a = 3;

echo mais5($a);

echo $a;