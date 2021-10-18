<?php

$verduras = [
    'Arroz',
    'Feijão',
    'Salada',
    'tomate',
    'cebola',
    'alfaçe',
    'Rucula',
    'cebolinha',
];

// echo "- ". $verduras[0].PHP_EOL;
// echo "- ". $verduras[1].PHP_EOL;
// echo "- ". $verduras[2].PHP_EOL;
// echo "- ". $verduras[3].PHP_EOL;
// echo "- ". $verduras[4].PHP_EOL;
// echo "- ". $verduras[5].PHP_EOL;

$total_de_itens = count($verduras);

for (
    /*A*/ $i = 0;
    /*B*/ $i < $total_de_itens;
    /*D*/ $i = $i +1
)
{
    /*C*/ echo "- ". $verduras[$i].PHP_EOL;
}