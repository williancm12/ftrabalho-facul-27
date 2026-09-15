<?php
// Exercício 27: Verificar se número é estritamente maior que zero

echo "Digite um número inteiro: ";
$numero = (int) trim(fgets(STDIN));

if ($numero > 0) {
    echo "O número $numero é estritamente maior que zero.\n";
} else {
    echo "O número $numero NÃO é estritamente maior que zero.\n";
}
