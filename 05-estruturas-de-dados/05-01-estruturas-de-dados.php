<?php

$nome = "Tiago";
$email = "tiago@tiago.com";

$pessoas = [
    [
        "Tiago",
        "tiago@tiago.com",
    ],
    [
        "pedro",
        "pedro@tiago.com",
    ]
];

// echo $pessoas[1][0];
print_r($pessoas);

$frutas = new stdClass;
$frutas->fruta_1 = 'mamao';
$frutas->fruta_2 = 'banana';
$frutas->fruta_3 = 'manga';

print_r($frutas);
// print_r($frutas->fruta_3);