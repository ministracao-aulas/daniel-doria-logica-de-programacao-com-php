<?php

$fruta = 'banana';
$fruta = 'jaca';

function maiuscula($nome)
{
    return strtoupper($nome);
}

// echo maiuscula($fruta);

function separeAsLetras($palavra, $separador = '-')
{
    $split = str_split($palavra);
    return implode($separador, $split);
}

// echo separeAsLetras('algo');
echo separeAsLetras('algo', '=');