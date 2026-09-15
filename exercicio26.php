<?php
// Exercício 26: Troca de Conteúdo entre Variáveis

echo "Digite o valor de A: ";
$a = (int) trim(fgets(STDIN));

echo "Digite o valor de B: ";
$b = (int) trim(fgets(STDIN));

echo "\nAntes da troca: A = $a, B = $b\n";

$temp = $a;
$a = $b;
$b = $temp;

echo "Depois da troca: A = $a, B = $b\n";
