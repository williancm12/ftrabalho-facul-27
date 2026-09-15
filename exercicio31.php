<?php
// Exercício 31: Verificar se número é PAR ou ÍMPAR

echo "Digite um número inteiro: ";
$numero = (int) trim(fgets(STDIN));

if ($numero % 2 == 0) {
    echo "O número $numero é PAR.\n";
} else {
    echo "O número $numero é ÍMPAR.\n";
}
