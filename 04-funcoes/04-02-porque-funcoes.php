<?php
/*
    Funções são blocos de códigos reutilizáveis, o que nos permite 1 único código poder ser utilizado em diversos pontos da aplicação.
    Nem sempre uma função precisará ser reutilizada, nem esse é o único critério para a criação de uma função.
    Em certos pontos da aplicação, separar blocos de códigos em funções, torna-o mais legível e facilita a manutenção da aplicação.
    Separar uma parte da lógica de sua aplicação em funções por em exemplo quando o resultado dessa lógica ficará em 1 variável especificamente.
    Se no futuro sua lógica mudar mas o uso, tipo de dado e/ou estrutura dessa variável permanecer o mesmo, seu código precisará ser alterado
    em apenas e 1 ponto: na função.
*/

$clientes_fieis = [
    'joao',
    'marcos',
];

$cliente        = 'pedro';
$conta          = 50;
$gorjeta        = in_array($cliente, $clientes_fieis) ?/*verdadeiro*/ 0 :/*falso*/ 5;
$valor_total    = $conta + ($conta / 100 * $gorjeta);
// var_dump($valor_total);



//----------------

function totalAPagar($conta, $cliente)
{
    $clientes_fieis = [
        'joao',
    ];

    $gorjeta = in_array($cliente, $clientes_fieis) ? 3 : 5;

    $impostos = ($conta / 100 * 3);

    $totalAPagar = $conta + $impostos + ($conta / 100 * $gorjeta);

    return $totalAPagar;
}

$cliente     = 'joao';
$conta       = 50;
$valor_total = totalAPagar($conta, $cliente);
var_dump($valor_total);