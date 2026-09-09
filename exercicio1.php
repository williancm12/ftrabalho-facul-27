<?php
// Exercício 1: Verificador de Semáforo

echo "Digite a cor do semáforo (vermelho, amarelo, verde): ";
$cor = trim(fgets(STDIN));

if ($cor == 'vermelho') {
    echo "Pare!\n";
} elseif ($cor == 'amarelo') {
    echo "Atenção!\n";
} elseif ($cor == 'verde') {
    echo "Siga!\n";
} else {
    echo "Cor inválida.\n";
}
