<?php

// $nome = "Pedro";
// var_dump($nome);
// $nome = "Marcos";
// var_dump($nome);
// $nome = "Mateus";
// var_dump($nome);


// $total_da_compra = 0;
// $total_da_compra = $total_da_compra +10;
// $total_da_compra = $total_da_compra +150;
// $total_da_compra = $total_da_compra +15;
// $total_da_compra = $total_da_compra +18;
// var_dump($total_da_compra);


/*
    Regras para definição de variáveis
    - Pode-se apenas utilizar alfa-numérico e underscore (_);
    - A primeira letra do nome da variável NÃO PODE SER UM NÚMERO, porém números podem estar no nome;
    - Em suma, caracters aceitáveis: A-Z, a-z, 0-9 e _;
    - Não pode conter espaços. Em lugar desses, utilizar o underscore ou usar camelCase.

    Convenção de nomenclatura:
    - Ao se nomear variáveis utilizar snake-case ou camel-case:
        - Snake-case:
            $minha_variavel_legal
            $minha_variavel_01
            $variavel_05
        - Camel-case:
            $minhaVariavelLegal
            $minhaVariavel01
            $variavel05

    PS: Apesar da convenção, nada o impede de nomear como quiser suas variáveis, porém, para fins de compreensão global,
    sugere-se a convensão.
*/

$minha_variavel_legal = "Correta e dentro da convenção com snake-case";
$minhaVariavelLegal = "Correta e dentro da convenção com camel-case";
$MINHA_VARIAVEL_LEGAL = "Correta mas fora da convenção";
$minha_Variavel_Legal = "Correta mas fora da convenção";
$minhavariavellegal = "Correta mas fora da convenção";
$2minhavariavellegal = "errada pois começa com número";