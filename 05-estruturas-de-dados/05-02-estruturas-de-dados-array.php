<?php

$nomes1 = [
    'Tiago',
    'pedro',
    'marcos',
];//esse é array simples (apenas 1 nível) e não-associativos

print_r($nomes1[0]);
echo PHP_EOL;

$nomes2 = [
    [
        'Tiago',
        'pedro',
        'marcos',
    ],
    [
        'Simão',
        'Lucas',
        'Paulo',//alvo
    ],
];//esse é array multinível (matriz de arrays) e não-associativos

print_r($nomes2[1][2]);
echo PHP_EOL;

$nomes3 = [
    'br' => [
        'maria',
        'ana',//alvo
    ],
    'us' => [
        'mary',
        'anne',
    ],
];//esse é array multinível (matriz de arrays) e contem associativos e não-associativos

print_r($nomes3['br'][1]);
echo PHP_EOL;

$nomes4 = [
    'homens' => [
        'paulo' => 'Paul',
        'marcos' => 'Marc',
        'tiago' => 'James',
    ],
    'mulheres' => [
        'maria' => 'Mary',
        'marcia' => 'Marcy',
        'ana' => 'Anne',
    ],
];//esse é array multinível (matriz de arrays) e todos são associativos

print_r($nomes4['mulheres']['maria']);
echo PHP_EOL;


$nomes5 = [
    'homens' => [
        'paulo' => 'Paul',
        'marcos' => 'Marc',
        'Daniel', //alvo
        'tiago' => 'James',
        'Henrique',
    ],
    'mulheres' => [
        'maria' => 'Mary',
        'marcia' => 'Marcy',
        'ana' => 'Anne',
    ],
];//esse é array multinível (matriz de arrays) e contem associativos e não-associativos

print_r($nomes5['homens'][0]);
// print_r($nomes5['homens'][1]);
echo PHP_EOL;