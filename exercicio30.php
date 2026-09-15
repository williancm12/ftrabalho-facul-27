<?php
// Exercício 30: Verificar se número é divisível por 3

echo "Digite um número inteiro: ";
$numero = (int) trim(fgets(STDIN));

if ($numero % 3 == 0) {
    echo "O número $numero É divisível por 3 (múltiplo de 3).\n";
} else {
    echo "O número $numero NÃO é divisível por 3.\n";
}
