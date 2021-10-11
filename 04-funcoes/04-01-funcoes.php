<?php

/*
    Regras para definição de funções
    - Pode-se apenas utilizar alfa-numérico e underscore (_);
    - A primeira letra do nome da função NÃO PODE SER UM NÚMERO, porém números podem estar no nome;
    - Em suma, caracters aceitáveis: A-Z, a-z, 0-9 e _;
    - Não pode conter espaços. Em lugar desses, utilizar o underscore ou usar camelCase.

    Convenção de nomenclatura:
    - Ao se nomear funções utilizar camel-case:
        - Camel-case:
            function minhaFuncaoLegal() {}
            function minhaFuncao01() {}
            function funcao05() {}

    PS: há muitos códigos onde a função estará em snake-case, não está errada, porém se sugere utilizar camel-case.
    Segue exemplos em snake-case:
            function minha_funcao_legal() {}
            function minha_funcao_01() {}
            function funcao_05() {}

    PS2: Apesar da convenção, nada o impede de nomear como quiser suas funções, porém, para fins de compreensão global,
    sugere-se a convensão.
*/

//Correta mas fora da convenção pois está em snake-case
function minha_variavel_legal()
{}

//Correta e dentro da convenção com camel-case
function minhaVariavelLegal()
{}

//Correta mas fora da convenção pois está em upper-case
function MINHA_VARIAVEL_LEGAL()
{}

//Correta mas fora da convenção
function minha_Variavel_Legal()
{}

//Correta mas fora da convenção
function minhavariavellegal()
{}

//errada pois começa com número
function 2minhavariavellegal()
{}
