<?php

$a = '48';
$b = &$a;
$b = '50';
$a = 74;

$b = 'algo';
$a = 'algo2';

unset($a);

$a = 'bola2';

echo "a: $a b: $b";
