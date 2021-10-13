<?php

$nome = 'Tiago';
$nome = 'Daniel';

//Evite utilizar a diretiva global
function altera()
{
    global $nome;
    $nome = 'Marcos';
}

altera();

echo $nome;

