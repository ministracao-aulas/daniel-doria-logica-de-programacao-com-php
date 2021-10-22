<?php

$a = '1';
$b = 1;
$c = 1;
$d = 2;

/*
    $a == $b	Igual	        Verdadeiro (true) se $a é igual a $b.
    $a === $b	Idêntico	    Verdadeiro (true) se $a é igual a $b, e eles são do mesmo tipo.
    $a != $b	Diferente	    Verdadeiro se $a não é igual a $b.
    $a !== $b	Não idêntico	Verdadeiro de $a não é igual a $b, ou eles não são do mesmo tipo (introduzido no PHP4).
    $a <> $b	Diferente	    Verdadeiro se $a não é igual a $b.
    $a < $b	    Menor que	    Verdadeiro se $a é estritamente menor que $b.
    $a > $b	    Maior que	    Verdadeiro se $a é estritamente maior que $b.
    $a <= $b	Menor ou igual	Verdadeiro se $a é menor ou igual a $b.
    $a >= $b	Maior ou igual	Verdadeiro se $a é maior ou igual a $b.
    $a <=> $b	Spaceship    	Um integer menor que, igual a ou maior que zero quando $a é, respectivamente, menor que, igual a ou maior que $b. Disponível a partir do PHP 7.
*/

echo ($a <=> $d) ? 'verdadeiro' : 'falso';
