<?php
// Exercício 32: Verificar se número é positivo, negativo ou nulo

echo "Digite um número real: ";
$numero = (float) trim(fgets(STDIN));

if ($numero > 0) {
    echo "O número $numero é POSITIVO.\n";
} elseif ($numero < 0) {
    echo "O número $numero é NEGATIVO.\n";
} else {
    echo "O número é NULO (zero).\n";
}
