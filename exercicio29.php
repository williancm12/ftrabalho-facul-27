<?php
// Exercício 29: Inverso se positivo, valor absoluto se negativo

echo "Digite um número real: ";
$numero = (float) trim(fgets(STDIN));

if ($numero > 0) {
    $inverso = 1 / $numero;
    echo "Inverso de $numero: " . number_format($inverso, 4) . "\n";
} else {
    $absoluto = $numero * -1;
    echo "Valor absoluto de $numero: $absoluto\n";
}
