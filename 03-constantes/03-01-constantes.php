<?php
//Forma 1 de definir constantes
// const NOME = "Tiago";

//Forma 2 de definir constantes
define('NOME', 'Tiago');

define('APP_NAME', 'Meu App');

// const NOME = "Tiago F";//Dará erro: PHP Notice:  Constant NOME already defined

// echo "Eu sou o ". NOME;


// if(defined('APP_NAME'))
//     echo "Nome do App ". APP_NAME;
// else
//     echo "App sem nome";

$nome_do_app = defined('APP_NAME') ? APP_NAME : "Nome Padrão";//Operador ternário

// echo $nome_do_app;

// echo $algo; // Echo em uma variável
// echo algo; // Echo em uma constante
// echo 'algo'; // Echo em uma string

//------------------------------


/*
    Regras para definição de constantes
    - Pode-se apenas utilizar alfa-numérico e underscore (_);
    - A primeira letra do nome da constante NÃO PODE SER UM NÚMERO, porém números podem estar no nome;
    - Em suma, caracters aceitáveis: A-Z, a-z, 0-9 e _;
    - Não pode conter espaços. Em lugar desses, utilizar o underscore.

    Convenção de nomenclatura:
    - Ao se nomear constantes utilizar upper-case:
        - Upper-case:
            $MINHA_VARIAVEL_LEGAL
            $MINHA_VARIAVEL_01
            $VARIAVEL_05

    PS: Apesar da convenção, nada o impede de nomear como quiser suas constantes, porém, para fins de compreensão global,
    sugere-se a convensão.
*/

define('MINHA_VARIAVEL_LEGAL_01',   "Correta e dentro da convenção com upper-case");
define('MINHAVARIAVELLEGAL01',      "Correta mas fora da convenção");
define('minha_variavel_legal_01',   "Correta mas fora da convenção");
define('minhavariavellegal01',      "Correta mas fora da convenção");
define('2MINHAVARIAVELLEGAL01',     "errada pois começa com número");