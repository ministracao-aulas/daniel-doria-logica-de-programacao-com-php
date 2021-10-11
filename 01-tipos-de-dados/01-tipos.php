<?php
/*
    String
    Integer/Int
    Float
    null
    Array
    Object
*/

$nome   = "Marcos"; //String
$idade  = 29;       //Integer/Int
$altura = 1.83;     //Float
$cnh    = null;     //null
$filhos = [];       //Array
$emails = [         //Array
    'marcos@email.com',
    "marcosd@email.com",
];

//-----------------------

$pessoa = [
    'Tiago',
    'Fernandes',
    [ "tiago@tiago.com", "tiago2@tiago.com", ],
    1.83,
    'AB',
    28,
    null,
];


var_dump($pessoa);