<?php
// Exercício 3: Dia da Semana com switch

echo "Digite o número do dia (1=Domingo, 2=Segunda... 7=Sábado): ";
$dia_semana = (int) trim(fgets(STDIN));

switch ($dia_semana) {
    case 1:
        echo "Domingo\n";
        echo "Fim de semana!\n";
        break;
    case 2:
        echo "Segunda-feira\n";
        echo "Dia útil.\n";
        break;
    case 3:
        echo "Terça-feira\n";
        echo "Dia útil.\n";
        break;
    case 4:
        echo "Quarta-feira\n";
        echo "Dia útil.\n";
        break;
    case 5:
        echo "Quinta-feira\n";
        echo "Dia útil.\n";
        break;
    case 6:
        echo "Sexta-feira\n";
        echo "Dia útil.\n";
        break;
    case 7:
        echo "Sábado\n";
        echo "Fim de semana!\n";
        break;
    default:
        echo "Número de dia inválido.\n";
        break;
}
