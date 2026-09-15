<?php
// Exercício 33: Exibir o maior entre dois números reais

echo "Digite o primeiro número: ";
$a = (float) trim(fgets(STDIN));

echo "Digite o segundo número: ";
$b = (float) trim(fgets(STDIN));

if ($a > $b) {
    echo "O maior número é: $a\n";
} elseif ($b > $a) {
    echo "O maior número é: $b\n";
} else {
    echo "Os dois números são iguais: $a\n";
}
