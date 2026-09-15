<?php
// Exercício 28: Exibir a metade do número se for maior que 20

echo "Digite um número real: ";
$numero = (float) trim(fgets(STDIN));

if ($numero > 20) {
    $metade = $numero / 2;
    echo "A metade de $numero é: " . number_format($metade, 2) . "\n";
} else {
    echo "O número não é maior que 20. Nenhum valor exibido.\n";
}
